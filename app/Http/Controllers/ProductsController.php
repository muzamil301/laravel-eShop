<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ProductsController extends BaseController
{

    public function index($id)
    {

        $Products = DB::table('products')->where('status', '=', 1)->where('SubCategoryId', '=' , $id)->get();
        
        return view('products')->with('products', $Products);
    }
    
}
