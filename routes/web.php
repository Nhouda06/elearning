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

//Admin session
Route::prefix('admin')->group(function () {
    // authentification
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@default')->name('admin');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::get('/register', 'Auth\AdminRegisterController@create')->name('admin.register.submit');

    //password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //dashboard
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    //categories
    Route::get('/categories', "CategoryController@index")->name('admin.categories.index');
    Route::get('/categories/create', "CategoryController@create")->name('admin.categories.create');
    Route::post('/categories/store', 'CategoryController@store')->name('admin.categories.store');


});


//User Session
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');


