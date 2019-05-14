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

Route::get('kelahiran','KelahiranController@index');
Route::get('tambahkelahiran','KelahiranController@create');
Route::post('kelahiran/store','KelahiranController@store');
Route::get('kelahiran/edit/{id}','KelahiranController@edit');
Route::post('kelahiran/update/{id}','KelahiranController@update');
Route::get('kelahiran/destroy/{id}','KelahiranController@destroy');

Route::get('penduduk','PendudukController@index');
Route::get('tambahpenduduk','PendudukController@create');
Route::post('penduduk/store','PendudukController@store');
Route::get('penduduk/edit/{id}','PendudukController@edit');
Route::post('penduduk/update/{id}','PendudukController@update');
Route::get('penduduk/destroy/{id}','PendudukController@destroy');

Route::get('kematian','KematianController@index');
Route::get('tambahkematian','KematianController@create');
Route::post('kematian/store','KematianController@store');
Route::get('kematian/edit/{id}','KematianController@edit');
Route::post('kematian/update/{id}','KematianController@update');
Route::get('kematian/destroy/{id}','KematianController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('kelahiran/cari','KelahiranController@cari');
Route::get('/home/login', 'HomeController@logout');
