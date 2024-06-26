<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\level;
use App\Models\Materi;
use App\Models\Posttest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BadgeController extends Controller
{
    public function manageBadge($id_materi)
    {
        $badges = Badge::all();
        $materi = Materi::findOrFail($id_materi);
        $level = Level::where('id_materi', $id_materi)->first();
        $posttest = Posttest::where('id_level', $level->id_level)->first();

        return view('lencana-siswa.kelola-lencana', compact('badges', 'materi', 'posttest'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'topik' => 'required', // Sesuaikan dengan aturan validasi yang diperlukan
            'lencana' => 'required|image', // Validasi untuk file gambar
        ]);


        $badge = new Badge();

        $badge->explanation = $request->topik;

        // Upload gambar dan simpan nama file ke dalam database
        $imageName = time() . '.' . $request->lencana->extension();
        $request->lencana->move(public_path('images'), $imageName);
        $badge->image = $imageName;

        $badge->id_penggunaWeb = 1; // contoh penggunaan id_penggunaWeb
        $badge->id_materi = $request->id_materi; // contoh penggunaan id_materi
        $badge->id_posttest = $request->id_posttest; // contoh penggunaan id_posttest

        // Simpan data ke dalam database
        $badge->save();

        return redirect()->back()->with('success', 'Data badge berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'topik' => 'required', // Sesuaikan dengan aturan validasi yang diperlukan
            'lencana' => 'image', // Validasi untuk file gambar (opsional)
        ]);

        // Cari badge berdasarkan ID
        $badge = Badge::findOrFail($id);

        // Update field 'topik' jika ada perubahan
        $badge->explanation = $request->topik;

        // Jika ada gambar yang diunggah, simpan gambar baru dan hapus gambar lama
        if ($request->hasFile('lencana')) {
            // Hapus gambar lama
            if ($badge->image) {
                Storage::delete('images/' . $badge->image);
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->lencana->extension();
            $request->lencana->move(public_path('images'), $imageName);
            $badge->image = $imageName;
        }


        // Simpan perubahan ke dalam database
        $badge->save();

        return redirect()->back()->with('success', 'Data badge berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Find the badge by ID
        $badge = Badge::findOrFail($id);
    
        // Delete the badge image from storage if it exists
        if ($badge->image) {
            Storage::delete('images/' . $badge->image);
        }
    
        // Delete the badge
        $badge->delete();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Data badge berhasil dihapus!');
    }
}
