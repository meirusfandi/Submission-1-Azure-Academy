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


Route::get('/home', 'WebController@index');
Route::get('/home/tambah', 'WebController@tambah');
Route::get('/home/edit/{id}', 'WebController@edit');
Route::get('/home/hapus/{id}', 'WebController@hapus');
Route::post('/home/store','WebController@store');
Route::post('/home/update', 'WebController@update');
Route::get('/home/cari', 'WebController@cari');