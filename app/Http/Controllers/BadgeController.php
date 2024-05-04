<?php

namespace App\Http\Controllers;
use App\Models\Badge;

use App\Models\Materi;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    public function manageBadge()
    {
        $badges = Badge::all();


        return view('lencana-siswa.kelola-lencana', compact('badges'));

    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'topik' => 'required', // Sesuaikan dengan aturan validasi yang diperlukan
            'lencana' => 'required|image', // Validasi untuk file gambar
        ]);
    
        // Simpan data ke database
        $materi = Materi::all();


        $badge = new Badge();
        $badge->explanation = $request->topik;
        
        // Upload gambar dan simpan nama file ke dalam database
        $imageName = time().'.'.$request->lencana->extension();
        $request->lencana->move(public_path('images'), $imageName);
        $badge->image = $imageName;
        
        // Sesuaikan id_penggunaWeb, id_materi, id_posttest sesuai kebutuhan
        $badge->id_penggunaWeb = 1; // contoh penggunaan id_penggunaWeb
        $badge->id_materi = $request->materi; // contoh penggunaan id_materi
        $badge->id_posttest = $request->id_posttest;; // contoh penggunaan id_posttest
        
        // Simpan data ke dalam database
        $badge->save();
    
        return redirect()->route('kelola-lencana')->with('success', 'Data badge berhasil disimpan!');
    }
    
}
