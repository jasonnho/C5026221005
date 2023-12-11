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

Route::get('halo', function () {
    return "Halo apa kabar?";
});

Route::get('tes', function () {
    return "<h1>Halo apa kabar?</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan1', function () {
    return view('pertemuan1');
});

Route::get('pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('pertemuan22', function () {
    return view('pertemuan22');
});

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('tugas2', function () {
    return view('tugas2');
});

Route::get('tugas3', function () {
    return view('tugas3');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('javascript1', function () {
    return view('javascript1');
});

Route::get('javascript2', function () {
    return view('javascript2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/latihanuas1','App\Http\Controllers\NilaiController@index');
Route::get('/latihanuas1/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/latihanuas1/store','App\Http\Controllers\NilaiController@store');

Route::get('/latihanuas2','App\Http\Controllers\BelanjaController@index');
Route::get('/latihanuas2/tambah','App\Http\Controllers\BelanjaController@tambah');
Route::post('/latihanuas2/store','App\Http\Controllers\BelanjaController@store');
Route::get('/latihanuas2/hapus/{id}','App\Http\Controllers\BelanjaController@hapus');


Route::get('/tugaspertemuan15','App\Http\Controllers\MejaController@index');
Route::get('/tugaspertemuan15/tambah','App\Http\Controllers\MejaController@tambah');
Route::post('/tugaspertemuan15/store','App\Http\Controllers\MejaController@store');
Route::get('/tugaspertemuan15/edit/{id}','App\Http\Controllers\MejaController@edit');
Route::post('/tugaspertemuan15/update','App\Http\Controllers\MejaController@update');
Route::get('/tugaspertemuan15/hapus/{id}','App\Http\Controllers\MejaController@hapus');
Route::get('/tugaspertemuan15/cari','App\Http\Controllers\MejaController@cari');

Route::get('/combo','App\Http\Controllers\ComboController@index');
Route::get('/hasilcombo','App\Http\Controllers\ComboController@view');
