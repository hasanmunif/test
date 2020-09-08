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

Route::get('home', function () {
    return view('main');
});

Route::get('/form', 'FormController@index'); 
Route::post('/proses', 'FormController@proses');

Route::get('/kalkulator', 'KalkulatorController@kalkulator');
// Route::get('latihan', 'LatihanController@index');