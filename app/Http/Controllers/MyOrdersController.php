<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;    
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use DB;

class MyOrdersController extends BaseController
{

    public function index()
    {

//        $id = $_COOKIE['eshop_cart'];

        $userId = Auth::id();
//        var_dump($userId);die;


        $orders = DB::table('order_det')
            ->select('order_det.id as orderDetailId', 'order_mast.created_at as dateCreated',
                      'order_det.quantity as quantity', 'order_det.paidPrice as price',
                      'order_det.order_progress as status', 'products.imgUrl as image',
                'products.title as title'
            )
            ->join('products', 'products.id', '=', 'order_det.productId')
            ->join('order_mast', 'order_mast.id', '=', 'order_det.orderId')
            ->where('order_det.status',1)
            ->where('order_mast.userId',$userId)
        ->get();
//        var_dump($orders);die;

            $totalPrice = 0;    
            foreach ($orders as $o){
                $totalPrice+=$o->price;
            }

        return view('my-orders')->with('orders', $orders);
    }
    
}
