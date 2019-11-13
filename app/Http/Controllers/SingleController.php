<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Routing\Redirector;

class SingleController extends BaseController
{

//    use ValidatesRequests;

    public function index(Request $request, $id, $title)
    {
        $products = DB::table('products')->where('status', '=', 1)->where('id', '=', $id)->first();

        if ($_POST) {

            $qty = $request->get('qtybutton');
            $productId = $id;
            $catId = $request->get('catid');
            $subcatId = $request->get('subcatid');
            $paidPrice = $request->get('price');

            if ($qty < 1) {
                return redirect()->route('singlePage', ['id' => $id, 'title' => $title])->with('message', 'Please choose atleast one item');
            } else if ($qty > $products->quantity) {
                return redirect()->route('singlePage', ['id' => $id, 'title' => $title])->with('message', "You can't order more than given stock.");

            } else {

                $user = Auth::User();
                if ($user) {
                    $userId = $user->id;
                } else {
                    $userId = null;
                }

                $cookie_name = "eshop_cart";

                if (isset($_COOKIE[$cookie_name])) {

                    $ord = DB::table('order_mast')->where('status', 0)->where('id', $_COOKIE[$cookie_name])->first();
//                var_dump($_COOKIE[$cookie_name]);
//                var_dump($ord);die;
                    if (!$ord) {
                        DB::table('order_mast')->insert(['userId' => $userId, 'status' => 0, 'created_at' => date('Y-m-d h:i:s')]);
                        $orderid = DB::getPdo()->lastInsertId();
                        $cookie_value = $orderid;
                    } else {
                        $orderid = $_COOKIE[$cookie_name];
                        $cookie_value = $_COOKIE[$cookie_name];
                    }


                } else {
                    DB::table('order_mast')->insert(['userId' => $userId, 'status' => 0, 'created_at' => date('Y-m-d h:i:s')]);
                    $orderid = DB::getPdo()->lastInsertId();
                    $cookie_value = $orderid;
                }


                DB::table('order_det')->insert(['productId' => $productId, 'categoryId' => $catId, 'paidPrice' => $paidPrice, 'subCategoryId' => $subcatId, 'orderId' => $orderid, 'quantity' => $qty, 'status' => 0, 'created_at' => date('Y-m-d h:i:s')]);


                setcookie($cookie_name, $cookie_value, time() + (8640000), "/"); // 86400 = 1 day

                $currentqty = $products->quantity;

                $updatedqty = $currentqty - $qty;
                DB::table('products')
                    ->where('id', $productId)
                    ->update(['quantity' => $updatedqty]);

                return redirect()->route('singlePage', ['id' => $id, 'title' => $title])->with('message', "Item(s) Successfully added to cart");
                
            }

        }


//        $products = DB::table('products')->where('status', '=', 1)->where('id', '=', $id)->first();


//        var_dump($currentqty);die;
//        $currentqty =


        return view('single')->with('product', $products);
    }

}
