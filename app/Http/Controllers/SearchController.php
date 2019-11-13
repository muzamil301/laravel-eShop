<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class SearchController extends BaseController
{

    public function index()
    {

        $products = DB::table('products')->where('status', '=', 1)->where('title', 'like', '%'.$_GET['search'].'%')->get();
//        var_dump($products);die;
        return view('searchResults')->with('products', $products);
//        Session::flush();
    }
    
}
