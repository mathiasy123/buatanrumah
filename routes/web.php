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

    Route::get('/ubah/pemasak/{user_id}', 'UserController@edit');
    Route::put('/ubah/pemasak', 'UserController@update');

    Route::get('/re-seller', 'AdminController@reSeller');

    Route::prefix('buatan-rumah')->group(function () {

        Route::get('/', 'AdminController@buatanRumah');

        Route::put('/', 'VendorContentController@update');
        Route::get('/{content}', 'VendorContentController@edit');
    });
    
    Route::get('/pemasak-profile', 'AdminController@chefProfile');

    Route::get('/pemasak-makanan', 'AdminController@chefFood');
    Route::post('/pemasak-makanan', 'AdminController@chefFood');
    
    Route::get('/tambah/pemasak-makanan', 'FoodController@create');
    Route::post('/tambah/pemasak-makanan', 'FoodController@store');
    Route::delete('/hapus/pemasak-makanan/{user_id}/{food_id}', 'FoodController@destroy');
    Route::get('/ubah/pemasak-makanan/{food_id}', 'FoodController@edit');
    Route::put('/ubah/pemasak-makanan', 'FoodController@update');

    Route::get('/pemasak-profil', 'AdminController@chefProfile');

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
 * Logout Routes
 */
Route::get('/logout', 'Auth\LoginController@userLogout');

/**
 * Chef's Routes
 */
Route::prefix('pemasak')->group(function () {

    Route::get('/', 'UserController@index');

    Route::get('/makanan', 'FoodController@index');
    Route::post('/makanan', 'FoodController@index');
    
    Route::get('/pemesanan', 'OrderController@index');
    Route::post('/pemesanan', 'OrderController@index');

    Route::get('/detail/pemesanan/{order_id}', 'OrderController@show');

    Route::get('/pemesanan-selesai', 'OrderController@finishedOrder');
    Route::post('/pemesanan-selesai', 'OrderController@finishedOrder');

    Route::prefix('profil')->group(function () {

        Route::get('/order/food/{food_id}', 'OrderController@create');
        Route::post('/store', 'OrderController@store');

        Route::get('/{user_id}', 'ProfileController@index');
        Route::post('/{user_id}', 'ProfileController@index');

    });

});

/**
 * Vendor Buatan Rumah Route
 */
Route::get('/', 'VendorController@index');


