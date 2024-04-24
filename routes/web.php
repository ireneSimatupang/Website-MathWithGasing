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
    return view('beranda');
});

Route::get('/akun-siswa', function () {
    return view('akun-siswa.akun-siswa');
});

Route::get('/akun-admin', function () {
    return view('akun-admin.akun-admin');
});

Route::get('/kelola-materi', function () {
    return view('kelola-materi.kelola-materi');
});

Route::get('/kelola-materi-bagian', function () {
    return view('kelola-materi.kelola-materi-bagian');
});

Route::get('/kelola-materi-level', function () {
    return view('kelola-materi.kelola-materi-level');
});

Route::get('/pencapaian-siswa', function () {
    return view('pencapaian-siswa.kelola-pencapaian');
});



Route::get('/Tambahdata-materi', function () {
    return view('Tambahdata-materi');
});

