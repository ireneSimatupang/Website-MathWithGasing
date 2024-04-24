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
    return view('index');
});

Route::get('/kelola-user', function () {
    return view('kelola-user');
});

Route::get('/kelola-admin', function () {
    return view('kelola-admin');
});

Route::get('/kelola-materi', function () {
    return view('kelola-materi');
});

Route::get('/kelola-materi-bagian', function () {
    return view('kelola-materi-bagian');
});

Route::get('/kelola-materi-level', function () {
    return view('kelola-materi-level');
});

Route::get('/kelola-pencapaian', function () {
    return view('kelola-pencapaian');
});

Route::get('/Tambahdata-materi', function () {
    return view('Tambahdata-materi');
});

