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
    return view('welcome');
});
//player
Route::get('/player','App\Http\Controllers\PlayerController@index');
Route::get('/player/tambah','App\Http\Controllers\PlayerController@tambah');
Route::post('/player/store','App\Http\Controllers\PlayerController@store');
Route::get('/player/edit/{id}','App\Http\Controllers\PlayerController@edit');
Route::post('/player/update','App\Http\Controllers\PlayerController@update');
Route::get('/player/hapus/{id}','App\Http\Controllers\PlayerController@hapus');

//playing
Route::get('/playing','App\Http\Controllers\PlayingController@index');
Route::get('/playing/tambah','App\Http\Controllers\PlayingController@tambah');
Route::post('/playing/store','App\Http\Controllers\PlayingController@store');
Route::get('/playing/edit/{id}','App\Http\Controllers\PlayingController@edit');
Route::post('/playing/update','App\Http\Controllers\PlayingController@update');
Route::get('/playing/hapus/{id}','App\Http\Controllers\PlayingController@hapus');