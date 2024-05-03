<?php

use App\Http\Controllers\ScorePostTestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('beranda');
});


Route::get('/akun-admin', function () {
    return view('akun-admin.akun-admin');
});

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


Route::get('/lencana-siswa', function () {
    return view('lencana-siswa.lencana-siswa');
});

Route::get('/kelola-lencana', function () {
    return view('lencana-siswa.kelola-lencana');
});



Route::get('/Tambahdata-materi', function () {
    return view('Tambahdata-materi');
});

// routes/web.php

Route::get('/akun-siswa', [UserController::class, 'manageStudents']);
Route::post('/akun-siswa/exportPDF/{id}', [UserController::class, 'exportLaporan']);

Route::get('/akun-admin', [AdminController::class, 'manageAdmin']);
Route::get('/lencana-siswa', [MateriController::class, 'manageMateri']);

Route::post('/approvedAdmin/{id}', [AdminController::class, 'approvedAdmin']);

Route::get('/pencapaian-siswa', [ScorePostTestController::class, 'index']);

Route::get('/generate-pdf/{user_id}', [UserController::class, 'generatePDF']);
Route::post('/send-email', [UserController::class, 'sendEmail']);


