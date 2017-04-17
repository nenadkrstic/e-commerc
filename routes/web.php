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
});


Auth::routes();
Route::get('/', 'PageController@index');
Route::get('home', 'PageController@index');
Route::get('logout', 'HomeController@logout');

