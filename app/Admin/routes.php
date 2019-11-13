<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    // $router->resource('categories', categoryController::class);

    $router->resource('/categories', CategoryController::class);

    $router->resource('/sub-categories', SubCategoryController::class);

    $router->resource('/products', ProductsController::class);
    
    $router->resource('/custom-media', MediaController::class);

    $router->resource('/orders', OrdersController::class);

});
