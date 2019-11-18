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
 * Registration Routes
 */
Route::prefix('register')->group(function () {
    Route::get('/', 'Auth\RegisterController@showRegistrationForm');
    Route::post('/', 'Auth\RegisterController@register');
});

/**
 * Admin (CMS) Login And Other Routes
 */
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm');
    Route::post('/login', 'Auth\AdminLoginController@login');
    Route::get('/', 'AdminController@index');
    Route::get('/pemasak', 'AdminController@chef');
    Route::post('/pemasak', 'AdminController@chef');
    Route::get('/re-seller', 'AdminController@reSeller');
    Route::get('/buatanrumah', 'AdminController@buatanRumah');
    Route::get('/pemasak-profile', 'AdminController@chefProfile');
    Route::get('/pemasak-makanan', 'AdminController@chefFood');
    Route::get('/logout', 'Auth\AdminLoginController@adminLogout');
});

/**
 * User (Chef) Login Routes
 */
Route::prefix('login')->group(function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/', 'Auth\LoginController@Login');
});

/**
 * Chef's Profile Routes
 */
Route::prefix('profile')->group(function () {
    Route::get('/order/food/{food_id}', 'OrderController@create');
    Route::get('/{user_id}', 'ProfileController@index');
    Route::post('/{user_id}', 'ProfileController@index');
});

/**
 * Logout Routes
 */
Route::get('/logout', 'Auth\LoginController@userLogout');

/**
 * Chef's Routes
 */
Route::prefix('chef')->group(function () {
    Route::get('/', 'UserController@index');

});

/**
 * Order Routes
 */
Route::prefix('order')->group(function () {
    Route::get('/detail/{order_id}', 'OrderController@show');
    Route::post('/store', 'OrderController@store');
    Route::get('/', 'OrderController@index');
    Route::post('/', 'OrderController@index');
});

/**
 * Food Route
 */
Route::get('/food', 'FoodController@index');

/**
 * Vendor Buatan Rumah Route
 */
Route::get('/', 'VendorController@index');


