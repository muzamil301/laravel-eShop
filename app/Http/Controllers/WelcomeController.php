<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class   WelcomeController extends BaseController
{

    public function index()
    {
//        dd(get_included_files());
        $Products = DB::table('products')->where('status', '=', 1)->get();

        $WomenProducts = DB::table('products')->where('status', '=', 1)->where('categoryId', '=', 10)->get();

        $BabyProducts = DB::table('products')->where('status', '=', 1)->where('categoryId', '=', 12)->get();
         // dd($Products);
        return view('welcome')->with('products', $Products)->with('womenProducts', $WomenProducts)->with('babyProducts', $BabyProducts);

    }
    
}
