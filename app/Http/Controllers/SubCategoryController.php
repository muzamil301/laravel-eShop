<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;





class SubCategoryController extends BaseController
{



    public function index($id)
    {

//        var_dump($id);
//        die;
    	$SubCategoryData = DB::table('sub_category')->where('status', '=', 1)->where('CategoryId', '=' , $id)->get();
    	// $CategoryData = DB::table('category')->where('status', '=', 1)->where('CategoryId', '=' , $id)->get();

        return view('SubCategory')->with('sub_categories', $SubCategoryData);

        
    }


    
}
