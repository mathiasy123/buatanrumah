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

/**
 * Vendor Buatan Rumah Route
 */
Route::get('/', 'VendorController@index');

/**
 * Registration Routes
 */
Route::prefix('register')->group(function () {
    Route::get('/', 'Auth\RegisterController@showRegistrationForm');
    Route::post('/', 'Auth\RegisterController@register');
});

/**
 * User (Chef) Login Routes
 */
Route::prefix('login')->group(function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/', 'Auth\LoginController@login');
});

/**
 * Admin (CMS) Login And Other Routes
 */
Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@showLoginForm');
});

/**
 * Logout Route
 */
Route::get('/logout', 'Auth\LoginController@logout');

/**
 * Chef's Profile Routes
 */
Route::prefix('profile')->group(function () {
    Route::get('{user_id}', 'UserController@profile');
    Route::get('order/food/{food_id}', 'OrderController@create');
    Route::post('{user_id}', 'UserController@profile');
});


/**
 * Chef's Dashboard Routes
 */
Route::get('/chef', 'UserController@index');

/**
 * Order Routes
 */
Route::prefix('order')->group(function () {
    Route::get('/', 'OrderController@index');
    Route::get('detail/{order_id}', 'OrderController@show');
    Route::post('/', 'OrderController@index');
    Route::post('store', 'OrderController@store');
});

/**
 * Food Route
 */
Route::get('/food', 'FoodController@index');



