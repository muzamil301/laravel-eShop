<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use DB;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $totalOrders = DB::table('order_mast')->select(DB::raw('COUNT(id) as total_orders'))->where('status','=',1)->first();
//                    var_dump($totalOrders);die;
//                    $column->append(Dashboard::environment());
                    $column->append('
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text">Orders</span>
                          <span class="info-box-number">'.$totalOrders->total_orders.'</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
          ');

                });

                $row->column(4, function (Column $column) {
//                    $column->append(Dashboard::extensions());
                    $totalProducts = DB::table('products')->select(DB::raw('COUNT(id) as total_products'))->where('status','=',1)->first();
                    $column->append('
                        
                      <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-sitemap"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text">Active Products</span>
                          <span class="info-box-number">'.$totalProducts->total_products.'</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    ');
                });

                $row->column(4, function (Column $column) {
//                    $column->append(Dashboard::dependencies());
                    $totalusers = DB::table('admin_users')->select(DB::raw('COUNT(id) as total_users'))->where('status','=',1)->first();
                    $column->append('
                        <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text">Active Users</span>
                          <span class="info-box-number">'.$totalusers->total_users.'</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    ');
                });
            });
    }
}
