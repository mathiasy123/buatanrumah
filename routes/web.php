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
Route::get('/login', 'AuthController@index');
Route::get('/signup', 'AuthController@signup');
Route::post('/signup', 'UserController@store');

Route::get('/', 'VendorController@index');

Route::get('/chef', 'UserController@index');

Route::get('/profile/{user_id}', 'UserController@profile');
Route::post('/profile/food', 'FoodController@search');
Route::get('/profile/order/food/{food_id}', 'OrderController@create');

Route::get('/order', 'OrderController@index');
Route::post('/order', 'OrderController@store');
Route::post('/order/search', 'OrderController@search');
Route::get('/order/detail/{order_id}', 'OrderController@show');

Route::get('/food', 'FoodController@index');