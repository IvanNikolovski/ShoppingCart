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

Route::get('/', 'ProductController@getIndex')->name('home');

Route::get('/shopping-cart', 'ProductController@getCart');
Route::get('/checkout', 'ProductController@getCheckout' )->middleware('auth');
Route::post('/checkout', 'ProductController@getCheckout' )->middleware('auth');
Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart');
Route::get('/reduce/{id}', 'ProductController@getReducedByOne');
Route::get('/remove/{id}', 'ProductController@getRemoveItem');
Route::get('/signup', 'Usercontroller@getSignup');
Route::post('/signup', 'Usercontroller@postSignup')->middleware('guest');
Route::get('/signin', 'Usercontroller@getSignin');
Route::post('/signin', 'Usercontroller@postSignin');
Route::get('/user/profile', 'Usercontroller@getProfile')->middleware('auth');
Route::get('/user/logout', 'Usercontroller@getLogout')->middleware('auth');
