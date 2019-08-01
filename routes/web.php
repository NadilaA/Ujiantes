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

/*Route::get('/pelayan/login', 'PelayanLoginController@showLoginForm')->name('pelayan.loginform');
Route::get('/pelayan/register', 'PelayanLoginController@showRegisterForm')->name('pelayan.registerform');
Route::post('/pelayan/login', 'PelayanLoginController@login')->name('pelayan.login');
Route::post('/pelayan/register', 'PelayanLoginController@register')->name('pelayan.register');
Route::get('/pelayan/home', 'PelayanLoginController@index')->middleware('auth:pelayan');
Route::get('/pelayan/logout', 'PelayanLoginController@logout')->name('pelayan.logout');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
