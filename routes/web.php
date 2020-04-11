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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Siswa
Route::get('/siswa', 'SiswaController@siswa');
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::put('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@delete');

//Pelanggaran
Route::get('/pelanggaran', 'PelanggaranController@pelanggaran');
Route::get('/pelanggaran/tambah', 'PelanggaranController@tambah');
Route::post('/pelanggaran/store', 'PelanggaranController@store');
Route::get('/pelanggaran/edit/{id}', 'PelanggaranController@edit');
Route::put('/pelanggaran/update/{id}', 'PelanggaranController@update');
Route::get('/pelanggaran/hapus/{id}', 'PelanggaranController@delete');

//Hadiah
Route::get('/hadiah', 'HadiahController@hadiah');
Route::get('/hadiah/tambah', 'HadiahController@tambah');
Route::post('/hadiah/store', 'HadiahController@store');
Route::get('/hadiah/edit/{id}', 'HadiahController@edit');
Route::put('/hadiah/update/{id}', 'HadiahController@update');
Route::get('/hadiah/hapus/{id}', 'HadiahController@delete');