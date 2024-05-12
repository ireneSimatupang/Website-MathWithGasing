<?php

use App\Http\Controllers\ScorePostTestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\UnitController;
use App\Mail\GasingEmail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function() {
    return view('Auth.login');
});

// BERANDA
Route::get('/beranda', [UserController::class, 'infoBeranda']);


// MENGELOLA AKUN

// AKUN ADMIN
Route::get('/akun-admin', function () {
    return view('akun-admin.akun-admin');
});


Route::post('/approvedAdmin/{id}', [AdminController::class, 'approvedAdmin']);


Route::get('/akun-admin', [AdminController::class, 'manageAdmin']);


// AKUN SISWA
Route::get('/akun-siswa', [UserController::class, 'manageStudents']);

Route::post('/akun-siswa/sendEmail/{id}', [UserController::class, 'sendEmail']);

Route::post('/update-status/{id}', [UserController::class, 'updateStatus']);

// MENGELOLA MATERI
Route::get('/kelola-materi', [MateriController::class,'getMateri']);

Route::post('/kelola-materi/tambah', [MateriController::class, 'tambahMateri']);

Route::post('/kelola-materi/ubah/{id}', [MateriController::class, 'ubahMateri']);

Route::post('/kelola-materi/hapus/{id}', [MateriController::class, 'hapusMateri']);


// MENGELOLA SUB-MATERI / UNIT
Route::get('/kelola-materi-bagian/{id}',[UnitController::class, 'getUnit']);

Route::post('/kelola-materi-bagian/tambah/{id}',[UnitController::class, 'tambahUnit']);

Route::post('/kelola-materi-bagian/ubah/{id}',[UnitController::class, 'ubahUnit']);

Route::post('/kelola-materi-bagian/hapus/{id}',[UnitController::class, 'hapusUnit']);


// MENGELOLA LEVEL
Route::get('/kelola-materi-level/{id}', [LevelController::class,'getLevel']);

Route::post('/kelola-materi-level/tambah-pretest/{id}', [LevelController::class,'tambahPretest']);

Route::post('/kelola-materi-level/ubah-pretest/{id}', [LevelController::class,'ubahPretest']);

Route::post('/kelola-materi-level/hapus-pretest/{id}', [LevelController::class,'hapusPretest']);

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
