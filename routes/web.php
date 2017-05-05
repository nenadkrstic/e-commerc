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
Route::group(['middleware'=>'Admin'],function(){
    Route::get('adminPanel','AdminController@adminPanel');
    Route::get('createArticle','AdminController@createArticle');
    Route::get('closeOrders','AdminController@closeOrders');
    Route::get('openOrders','AdminController@openOrders');
    Route::post('saveArticle','AdminController@saveArticle');
    Route::get('addToCart/{id}','CartController@addToCart');
    Route::get('cartContent','CartController@cartContent');
    Route::get('emptyCart','CartController@emptyCart');
    Route::get('singleDelete/{id}','CartController@singleDelete');
    Route::get('makeOrder','CartController@makeOrder');
    Route::get('openOrders','AdminController@openOrders');
    Route::get('closeOrder/{id}','AdminController@closeOrder');
});


Auth::routes();
Route::get('/', 'PageController@index');
Route::get('home', 'PageController@index');
Route::get('singleArticle/{id}', 'PageController@singleArticle');
Route::get('logout', 'HomeController@logout');
Route::get('contact', 'PageController@contact');
Route::get('support', 'PageController@support');
Route::get('delivery', 'PageController@delivery');
Route::get('maps', 'PageController@maps');

