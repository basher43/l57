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


Route::group(['namespace'=>'Frontend'], function(){
    Route::get('/', 'HomeController@showHomePage')->name('frontend.home');
    Route::post('/cart', 'CartController@addToCart')->name('addtocart');
    Route::get('/cart', 'CartController@showCart')->name('frontend.showCart');
    Route::get('/clear', 'CartController@clearCart')->name('frontend.clearCart');
    Route::get('/product/{id}', 'ProductController@showProductDetails')->name('showProduct');
    Route::get('/remove/cart/{id}', 'CartController@removeCart')->name('remove.cart');
    Route::get('/clear/cart', 'CartController@clearCart')->name('clear.cart');

});
