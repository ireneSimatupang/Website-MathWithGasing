<?php

namespace App\Http\Controllers;

use App\Mail\GasingEmail;
use App\Models\Admin;
use App\Models\Materi;
use Illuminate\Http\Request; // Import kelas Request
use Illuminate\Support\Facades\Mail; // Import kelas Mail
use App\Models\ScorePostTest;
use App\Models\ScorePreTest;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function infoBeranda()
    {
        $siswa = User::count();
        $admin = Admin::count();
        $materi = Materi::count();

        return view('beranda', compact('siswa', 'admin', 'materi'));
    }

    public function manageStudents()
    {
        $users = User::all(); // Ambil semua data user

        foreach ($users as $user) {
            $totalScore = ScorePostTest::where("id_user", $user->id_user)->sum('score');
            $user->total_score = $totalScore; // Menambahkan total score sebagai atribut baru pada user
            $totalPretest = ScorePreTest::where("id_user", $user->id_user)->sum('score');
            $user->total_pretest = $totalPretest; // Menambahkan total pretest sebagai atribut baru pada user
            $user->save(); // Menyimpan model user
        }

        return view('akun-siswa.akun-siswa', compact('users')); // Mengembalikan view akun-siswa
    }


    public function sendEmail($id_user)
    {
        $user = User::findOrFail($id_user);

        $totalScore = ScorePostTest::where("id_user", $user->id_user)->sum('score');
        $user->total_score = $totalScore; // Menambahkan total score sebagai atribut baru pada user
        $totalPretest = ScorePreTest::where("id_user", $user->id_user)->sum('score');
        $user->total_pretest = $totalPretest; // Menambahkan total pretest sebagai atribut baru pada user
        $user->save(); // Menyimpan model user


        $pdf = PDF::loadView('akun-siswa.laporan_nilai', compact('user'));
        $pdf->setPaper('A4', 'landscape');

        // Send email with attachment
        Mail::to($user->email)->send(new GasingEmail($pdf, $user->name, $user->email));

        // Set a flash message for the alert on the same page
        session()->flash('success', 'Email dengan laporan nilai telah dikirim ke ' . $user->email);

        return back(); // Redirect back to the current page
    }


    public function countUsers()
    {

        $totalUsers = User::count();

        return $totalUsers;
    }

    public function updateStatus($id)
    {
        $user = User::findOrFail($id);
    
        // Update status based on current value
        $user->status = ($user->status == '1') ? '0' : '1';
    
        $user->save();
    
        $statusTranslation = $user->status == '1' ? 'telah aktif' : 'telah dinonaktifkan';
    
        // Set a flash message for the alert on the same page using a single 'success' key
        session()->flash('success', "Status siswa {$user->name} $statusTranslation.");
    
        return redirect()->back();
    }
}
