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

// route relation one to one in pengguna and telepon table
Route::get('/pengguna','PenggunaController@index');

// route relation one to many in article and tag table
Route::get('/article','WebController@index');

// route relation one to many in article and tag table
Route::get('/anggota','HadiahController@index');

