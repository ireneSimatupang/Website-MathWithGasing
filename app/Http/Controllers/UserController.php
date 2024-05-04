<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // Import kelas Request
use Illuminate\Support\Facades\Mail; // Import kelas Mail
use App\Models\ScorePostTest;
use App\Models\ScorePreTest;
use App\Models\User;
use PDF;
class UserController extends Controller
{
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

   

    public function generatePDF($user_id)
    {
        $user = User::findOrFail($user_id);

        // Inisialisasi TCPDF
        $pdf = new TCPDF();
        $pdf->SetTitle('Detail Siswa');
        $pdf->AddPage();

        // Konten PDF
        $html = '
            <h1>Detail Siswa</h1>
            <p><strong>Nama:</strong> ' . $user->name . '</p>
            <p><strong>Email Orangtua:</strong> ' . $user->email . '</p>
            <p><strong>Jenis Kelamin:</strong> ' . $user->gender . '</p>
            <p><strong>Total Pre-Test:</strong> ' . ($user->total_pretest ?? '-') . '</p>
            <p><strong>Total Post-Test:</strong> ' . ($user->total_score ?? '-') . '</p>
        ';

        // Tulis konten HTML ke PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF sebagai unduhan
        $pdf->Output('detail_siswa.pdf', 'D');
    }

    
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $attachment = $request->file('attachment'); // Mengakses file dari request

        // Validasi file jika diperlukan
        if ($attachment && $attachment->isValid()) {
            \Mail::raw('Detail Siswa', function ($message) use ($email, $attachment) {
                $message->to($email)
                        ->subject('Detail Siswa')
                        ->attach($attachment->getRealPath(), [
                            'as' => 'detail_siswa.pdf',
                            'mime' => 'application/pdf',
                        ]);
            });

            return response()->json(['message' => 'Email berhasil dikirim.']);
        } else {
            return response()->json(['message' => 'Tidak dapat menemukan atau mengakses file.'], 400);
        }
    }

    public function exportLaporan($id_user)
    {
        $user = User::findOrFail($id_user);

        $totalScore = ScorePostTest::where("id_user", $user->id_user)->sum('score');
        $user->total_score = $totalScore; // Menambahkan total score sebagai atribut baru pada user
        $totalPretest = ScorePreTest::where("id_user", $user->id_user)->sum('score');
        $user->total_pretest = $totalPretest; // Menambahkan total pretest sebagai atribut baru pada user
        $user->save(); // Menyimpan model user

        
        $pdf = PDF::loadView('akun-siswa.laporan_nilai', compact('user'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('laporan-nilai-'.$user->name.'.pdf');
    }

    public function countUsers()
    {

        $totalUsers = User::count();

        return $totalUsers;
    }


}
