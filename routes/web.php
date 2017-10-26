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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/add', 'ProductsController@addToCart');
Route::get('/home/showCart', 'ProductsController@showCart');
Route::post('/home/showCart/delete', 'ProductsController@deleteToCart');
Route::post('/home/showCart/update{id}', 'ProductsController@updateToCart');
Route::post('/home/add/men', 'HomeController@addToCartMen' );		
Route::get('/product', 'HomeController@product');
Route::get('/item', 'HomeController@item');