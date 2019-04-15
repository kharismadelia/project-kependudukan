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

Route::get('master', function () {
    return view('master');
});

Route::get('index', function () {
    return view('layouts.index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('register', function () {
    return view('register');
});

Route::get('/kelahiran','KelahiranController@index');
Route::get('/tambahkelahiran','KelahiranController@create');
Route::post('/kelahiran/store','KelahiranController@store');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/home/login', 'HomeController@logout');
