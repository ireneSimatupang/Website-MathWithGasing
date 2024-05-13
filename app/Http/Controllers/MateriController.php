<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\UnitBonus;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function getMateri()
    {
        $materis = Materi::all();

        return view('kelola-materi.kelola-materi', compact('materis'));
    }

    public function manageMateri()
    {
        $materis = Materi::all();

        return view('lencana-siswa.lencana-siswa', compact('materis'));
    }
    public function manageMateriLencana()
    {
        $materis = Materi::all();

        return view('lencana-siswa.kelola-lencana', compact('materis'));
    }

    public function tambahMateri(Request $request)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $materi = new Materi();
        $materi->title = $request->judul;
        $materi->deskripsi = $request->deskripsi;
        $materi->id_penggunaWeb = auth()->id();

        $materi->save();

        $unitB = new UnitBonus();
        $unitB->id_materi = $materi->id_materi;
        $unitB->save();

        return redirect()->back()->with('success', 'Materi berhasil disimpan!');
    }

    public function ubahMateri(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $materi->title = $request->judul;
        $materi->deskripsi = $request->deskripsi;
        $materi->save();

        return redirect()->back()->with('success', 'Materi berhasil diubah!');
    }

    public function hapusMateri(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        // Delete related models
        $materi->statistic()->delete();
        $materi->UnitBonus()->delete();
        $materi->badge()->delete();
        $materi->unit()->delete();
        $materi->level()->delete();

        // Then delete the main Materi
        $materi->delete();

        return redirect()->back()->with('success', 'Materi berhasil dihapus!');
    }
}
