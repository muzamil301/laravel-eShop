<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;


class CategoriesController extends BaseController
{



    public function index()
    {

    	$categoryData = DB::table('category')->where('status', '=', 1)->get();

        return view('categories')->with('categories', $categoryData);


        
    }


    
}
