<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;

// Route::view('/', 'welcome', ['name' => 'welcome']);
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index')->name('welcome');

// Route::get('hello', function () {
//     return view('hello');
// });

// Route::get('hello', 'HelloController@index');

// Route::get('/hello', 'Hellocontroller@index');

// Route::get('/user/profile', 'somecontroller')->name('profile');


// Route::get('/hello', 'Hellocontroller@index');

Auth::routes();

Route::get('/about', 'Aboutcontroller@index');

Route::get('/contact', 'ContactController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/cart', 'CartController@index');

Route::post('/delete-cart', 'CartController@deleteItem');

Route::get('/categories', 'CategoriesController@index');

Route::get('/my-orders', 'MyOrdersController@index');

Route::post('/addToCart', 'CartController@addToCart')->name('addToCart');

Route::get('/sub-category/{id}/{title}', 'SubCategoryController@index');

Route::get('/products/{id}/{title}', 'ProductsController@index');

Route::get('/single/{id}/{title}', 'SingleController@index')->name('singlePage');
Route::post('/single/{id}/{title}', 'SingleController@index');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout', 'CheckoutController@index');

Route::get('/my-account', 'MyAccountController@index')->name('my-account');
Route::post('/my-account-post', 'MyAccountController@updateUser')->name('my-account-post');

Route::get('/login', 'LoginController@index');

Route::post('/login-post', 'Auth\LoginController@postLogin')->name('loginPost');

Route::get('/sign-up', 'SignUpController@index');

Route::get('/search-results', 'SearchController@index');

Route::get('/search-results/search', function () {});

Route::get('/flush', function () {
    Session::flush();
    return redirect('/');
})->name('flush');


// Route::get('/BlogDetail', 'BlogDetailController@index');
// Route::get('/', 'SingleProductControler@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
