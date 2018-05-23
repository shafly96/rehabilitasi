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


Route::group(['prefix' => 'rehabilitasi'], function () {
	Route::get('/user', 'RehabilitasiController@user');
	Route::get('/userID/{id}', 'RehabilitasiController@userID');
	Route::get('/grafik/{id}', 'RehabilitasiController@grafik');
	Route::get('/grafik2/{id}/{gerak}', 'RehabilitasiController@grafik2');
	Route::post('/create', 'RehabilitasiController@create');
	Route::post('/update', 'RehabilitasiController@update');
});
