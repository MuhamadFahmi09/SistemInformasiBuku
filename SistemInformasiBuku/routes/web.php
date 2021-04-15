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
//Buku
Route::get('/buku','BukuController@index');
Route::post('/buku/create','BukuController@create');
Route::get('/buku/{id}/edit','BukuController@edit');
Route::post('/buku/{id}/update','BukuController@update');
Route::get('/buku/{id}/delete','BukuController@delete');
//Pasok
Route::get('/pasok','PasokController@index');
Route::post('/pasok/create','PasokController@create');
Route::get('/pasok/{id}/edit','PasokController@edit');
Route::post('/pasok/{id}/update','PasokController@update');
Route::get('/pasok/{id}/delete','PasokController@delete');
//penjualan
Route::get('/penjualan','PenjualanController@index');
Route::post('/penjualan/create','PenjualanController@create');
Route::get('/penjualan/{id}/edit','PenjualanController@edit');
Route::post('/penjualan/{id}/update','PenjualanController@update');
Route::get('/penjualan/{id}/delete','PenjualanController@delete');
//tempatpenjualan
Route::get('/tempatpenjualan','TempatPenjualanController@index');
Route::post('/tempatpenjualan/create','TempatPenjualanController@create');
Route::get('/tempatpenjualan/{id}/edit','TempatPenjualanController@edit');
Route::post('/tempatpenjualan/{id}/update','TempatPenjualanController@update');
Route::get('/tempatpenjualan/{id}/delete','TempatPenjualanController@delete');
//distributor
Route::get('/distributor','DistributorController@index');
Route::post('/distributor/create','DistributorController@create');
Route::get('/distributor/{id}/edit','DistributorController@edit');
Route::post('/distributor/{id}/update','DistributorController@update');
Route::get('/distributor/{id}/delete','DistributorController@delete');
//settinglaporan
Route::get('/settinglaporan','SettingLaporanController@index');
Route::post('/settinglaporan/create','SettingLaporanController@create');
Route::get('/settinglaporan/{id}/edit','SettingLaporanController@edit');
Route::post('/settinglaporan/{id}/update','SettingLaporanController@update');
Route::get('/settinglaporan/{id}/delete','SettingLaporanController@delete');
//pengguna
Route::get('/pengguna','PenggunaController@index');
Route::post('/pengguna/create','PenggunaController@create');
Route::get('/pengguna/{id}/edit','PenggunaController@edit');
Route::post('/pengguna/{id}/update','PenggunaController@update');
Route::get('/pengguna/{id}/delete','PenggunaController@delete');
//user
Route::get('user-page', function() {
    return 'Halaman untuk User';
})->middleware('role:user')->name('user.page');

Route::get('kasir-page', function() {
    return 'Halaman untuk Kasir';
})->middleware('role:kasir')->name('kasir.page');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
