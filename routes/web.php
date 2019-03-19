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
    return view('auth.login');
});

Auth::routes();

// Dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Administrator & SuperAdministrator Control Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'middleware' => ['role:administrator'], 'namespace' => 'Admin'], function() {
    Route::resource('users','UsersController');
});
