<?php

use App\Http\Controllers\ScorePostTestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriController;

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

// BERANDA
Route::get('/', function () {
    return view('beranda');
});


// MENGELOLA AKUN

// AKUN ADMIN
Route::get('/akun-admin', function () {
    return view('akun-admin.akun-admin');
});


Route::post('/approvedAdmin/{id}', [AdminController::class, 'approvedAdmin']);


Route::get('/akun-admin', [AdminController::class, 'manageAdmin']);


// AKUN SISWA
Route::get('/akun-siswa', [UserController::class, 'manageStudents']);

Route::post('/akun-siswa/exportPDF/{id}', [UserController::class, 'exportLaporan']);




// MENGELOLA MATERI
Route::get('/kelola-materi', function () {
    return view('kelola-materi.kelola-materi');
});

Route::get('/kelola-materi/tambah', function () {
    return view('kelola-materi.tambah-materi');
});

Route::get('/kelola-materi-bagian', function () {
    return view('kelola-materi.kelola-materi-bagian');
});

Route::get('/kelola-materi-level', function () {
    return view('kelola-materi.kelola-materi-level');
});

Route::get('/Tambahdata-materi', function () {
    return view('Tambahdata-materi');
});



// PENCAPAIAN SISWA

Route::get('/pencapaian-siswa', [ScorePostTestController::class, 'index']);

Route::get('/generate-pdf/{user_id}', [UserController::class, 'generatePDF']);

Route::post('/send-email', [UserController::class, 'sendEmail']);




// MENGELOLA LENCANA

Route::get('/lencana-siswa', [MateriController::class, 'manageMateri']);

Route::get('/kelola-lencana/{id_materi}', [BadgeController::class, 'manageBadge']);

Route::post('/tambah-lencana', [BadgeController::class, 'store']);

Route::post('/ubah-lencana/{id}', [BadgeController::class, 'update']);

Route::delete('/hapus-lencana/{id}', [BadgeController::class, 'destroy']);





// routes/web.php
// Route::get('/kelola-lencana', [MateriController::class, 'manageMateriLencana']);
// Route::post('/kelola-lencana', 'BadgeController@store')->name('store_badge');
// Route::get('/kelola-lencana', 'BadgeController@kelola')->name('kelola-lencana');



