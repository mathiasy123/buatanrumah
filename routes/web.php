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
 * Login Routes
 */
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

/**
 * Logout Route
 */
Route::get('/logout', 'Auth\LoginController@logout');

/**
 * Registration Routes
 */
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register');

/**
 * Vendor Buatan Rumah Route
 */
Route::get('/', 'VendorController@index');

/**
 * Chef's Profile Routes
 */
Route::get('/profile/{user_id}', 'UserController@profile');
Route::get('/profile/order/food/{food_id}', 'OrderController@create');
Route::post('/profile/{user_id}', 'UserController@profile');


/**
 * Route protection
 * 
 * User have to login to access this page
 */
Route::middleware(['auth.custom'])->group(function() {
    /**
     * Chef's Dashboard Routes
     */
    Route::get('/chef', 'UserController@index')->middleware('auth.custom');

    /**
     * Order Routes
     */
    Route::post('/order/store', 'OrderController@store');
    Route::post('/order', 'OrderController@index');
    Route::get('/order', 'OrderController@index');
    Route::get('/order/detail/{order_id}', 'OrderController@show');
    
    /**
     * Food Route
     */
    Route::get('/food', 'FoodController@index');
});
