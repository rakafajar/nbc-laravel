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
    return view('auth.login');
});


// Untuk Halaman Awal Tampil
Route::resource('dashboard', 'DashboardController');


// Untuk Controller dan View Atribut
Route::resource('atribut', 'AtributController');
Route::get('atribut/destroy/{id}', 'AtributController@destroy');
// Untuk Controller dan View Atribut
Route::resource('nilai', 'NilaiController');
Route::get('nilai/destroy/{id}', 'NilaiController@destroy');

Auth::routes();
