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
