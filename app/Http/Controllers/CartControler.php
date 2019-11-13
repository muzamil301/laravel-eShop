<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Cookie;

class CartController extends BaseController
{

    public function index()
    {

        $id = 0;
        if (isset($_COOKIE['eshop_cart'])) {
            $id = $_COOKIE['eshop_cart'];
        }


        $orders = DB::table('order_det')
            ->select('order_det.id as orderDetId','order_det.orderId as parentId',  'order_det.quantity as quantity',
                        'products.id as productId', 'products.imgUrl as imageUrl', 'products.title as title', 'products.price as price')
            ->join('products', 'products.id', '=', 'order_det.productId')
            ->where('order_det.orderId', $id)
            ->where('order_det.status', 0)
            ->get();

        $totalPrice = 0;
        foreach ($orders as $o) {
            $totalPrice += $o->price * $o->quantity;
        }
//        var_dump($totalPrice);die;
        return view('cart')->with('orders', $orders)->with('price', $totalPrice);
//        var_dump($orders);die;
//        return view('cart')->with('orders', $orders);
    }

    public function deleteItem(Request $request)
    {

            $id = $request->id;
            $parentId = $request->parentId;

//            var_dump($request->id);
//            var_dump($request->parentId);

            $orders = DB::table('order_det')
                ->where('orderId', $parentId)
                ->where('order_det.status', 0)
                ->count();

            if ($orders > 1){

                DB::table('order_det')->where('id', '=', $id)->delete();
//                var_dump('if');die;

            }

            elseif($orders == 1){
                DB::table('order_det')->where('id', '=', $id)->delete();
                DB::table('order_mast')->where('id', '=', $parentId)->delete();
                $cookie = Cookie::forget('eshop_cart');
                // var_dump($cookie);die;

//                var_dump('ifelse');die;
            }


        return redirect()->back()->with('message', "Item(s) deleted successfully from cart");

    }

}
