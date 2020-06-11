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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/donaturTetap', function () {
//     return view('donaturTetap');
// });

// Route::get('/laporanDonasi', function () {
//     return view('laporanDonasi');
// });

// Route::get('/penerimaBus', function () {
//     return view('penerimaBus');
// });

// Route::get('/karyawan', function () {
//     return view('karyawan');
// });

// Route::get('/relawanSabab', function () {
//     return view('relawanSabab');
// });

// Route::get('/addDonaturTetap', function () {
//     return view('addDonaturTetap');
// });

// Route::get('/addLaporanDonasi', function () {
//     return view('addLaporanDonasi');
// });

Auth::routes();


// Dashboard
Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index')->name('home');

// Donasi
// Route::get('/donatur', 'DonatursController@index');
// Route::get('/donatur/create', 'DonatursController@create');
// Route::post('/donatur', 'DonatursController@store');
// Route::get('/donatur/{donatur}', 'DonatursController@show');
// Route::delete('/donatur/{donatur}', 'DonatursController@destroy');
// Route::get('/donatur/{donatur}/edit', 'DonatursController@edit');
// Route::patch('/donatur/{donatur}', 'DonatursController@update');
Route::resource('donatur', 'DonatursController');
Route::resource('donasi', 'DonasisController');
Route::resource('bus', 'BusesController');
Route::resource('kubah', 'KubahsController');
Route::resource('simbahku', 'SimbahkusController');
Route::resource('lain', 'LainsController');
Route::get('/penyaluran/createBus', 'PenyaluransController@createBus');
Route::get('/penyaluran/createKubah', 'PenyaluransController@createKubah');
Route::get('/penyaluran/createSimbahku', 'PenyaluransController@createSimbahku');
Route::get('/penyaluran/createLain', 'PenyaluransController@createLain');
Route::resource('penyaluran', 'PenyaluransController');
Route::resource('karyawan', 'KaryawansController');
Route::resource('relawan', 'RelawansController');
