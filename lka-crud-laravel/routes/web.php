<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/guru');
});

Route::get('/guru','App\Http\Controllers\GuruController@index');
Route::get('/guru/tambah','App\Http\Controllers\GuruController@tambah');
Route::post('/guru/store','App\Http\Controllers\GuruController@store');
Route::get('/guru/edit/{id}','App\Http\Controllers\GuruController@edit');
Route::post('/guru/update','App\Http\Controllers\GuruController@update');
Route::get('/guru/hapus/{id}','App\Http\Controllers\GuruController@hapus');