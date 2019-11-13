<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class CheckoutController extends BaseController
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

        if($_POST){
            if(!\Auth::User()){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $mail = $_POST['mail'];
                $province = $_POST['province'];
                $country = $_POST['country'];
                $city = $_POST['city'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $zip = $_POST['zip'];

                if (User::where('username', '=', $mail)->count() > 0) {

                    $userid = User::where('username', '=', $mail)->first()->id;
//                    var_dump($userid);die;
                    //$userid = User::where('username', '=', $mail)->id;
                }
                else{
                    DB::table('admin_users')->insert(['name' => $name,
                        'username' => $mail,
                        'phone' => $phone,
                        'gender' => 'm',
                        'country' => $country,
                        'region' => '',
                        'city' => $city,
                        'address' => $address,
                        'password' => \Hash::make($password)]);


                    $userid = DB::getPdo()->lastInsertId();

                    $user = DB::table('admin_users')->whereRaw("id='" . $userid . "'")->first();
                    $userObj = User::find($user->id);
                    Auth::login($userObj);

                    DB::table('admin_role_users')->insert(['role_id' => 2, 'user_id' => $userid]);
                }



            }else{
                $userid = \Auth::User()->id;
            }
            $orderId = null;
            if (isset($_COOKIE['eshop_cart'])) {
                $orderId = $_COOKIE['eshop_cart'];
            }
//                $order = DB::table('order_mast')->where('status',0)->where('id',$orderId)->first();

            if($orderId and $_POST['payment_method']=='cash'){

                DB::table('order_mast')->where('id',$orderId)->update(['status'=>1,'userId'=>$userid]);

                DB::table('order_det')->where('orderId',$orderId)->update(['status'=>1]);
                $_SESSION['success_msg'] = 'Order placed.';

            } elseif($orderId and $_POST['payment_method']=='card'){

                \Stripe\Stripe::setApiKey("sk_test_a8H4i305yqa98cyaJRGsc53B");

                $token = $_POST['stripeToken'];
                $charge = \Stripe\Charge::create([
                    'amount' => $_POST['totalAmount']*100,
                    'currency' => 'usd',
                    'description' => 'Eshop Payment',
                    'source' => $token,
                ]);

                DB::table('order_mast')->where('id',$orderId)->update(['status'=>1,'userId'=>$userid]);

                DB::table('order_det')->where('orderId',$orderId)->update(['status'=>1, 'payment_type'=>'Credit']);
                
                $_SESSION['success_msg'] = 'Payment has been received and order placed.';
            }
        }

        $orderId = null;
        if (isset($_COOKIE['eshop_cart'])) {
            $orderId = $_COOKIE['eshop_cart'];
        }

        $cart = DB::table('order_mast')->where('id','=',$orderId)->where('status','=',0)->first();
        return view('checkout')->with('is_cart',$cart)->with('orders', $orders)->with('price', $totalPrice);
    }
    
}
