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

Route::get('/menu', 'MenuController@index');
Route::get('/menu/tambah', 'MenuController@tambah');
Route::post('/menu/store', 'MenuController@store');
Route::get('/menu/close/{id}', 'MenuController@delete');

Route::get('/pesanan', 'PesananController@index');
Route::get('/pesanan/tambah', 'PesananController@tambah');
Route::post('/pesanan/store', 'PesananController@store');
Route::get('/pesanan/edit/{id}', 'PesananController@edit');
Route::put('/pesanan/update/{id}', 'PesananController@update');
Route::get('/pesanan/close/{id}', 'PesananController@close');

Route::get('/customer/login', 'CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'CustomerLoginController@login')->name('customer.login');
Route::post('/customer/register', 'CustomerLoginController@register')->name('customer.register');
Route::get('/customer/home', 'CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/logout', 'CustomerLoginController@logout')->name('customer.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
