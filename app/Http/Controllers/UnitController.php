<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unit;

class UnitController extends Controller
{
    public function getUnit(Request $request, $id)
    {
        $id_materi = $request->route('id');

        $unit = unit::where('id_materi', $id)->get();

        return view('kelola-materi.kelola-materi-bagian', compact('unit', 'id_materi'));
    }

    public function tambahUnit(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $unit = new unit();

        $unit->title = $request->judul;
        $unit->explanation = $request->deskripsi;
        $unit->id_materi = $id;
        $unit->save();

        return redirect()->back()->with('success', 'Sub Materi berhasil disimpan!');
    }

    public function ubahUnit(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);

    $unit = unit::findOrFail($id);  // Find the unit by id

    if (!$unit) {
        return redirect()->back()->with('error', 'Unit tidak ditemukan!');
    }

    $unit->title = $request->judul;
    $unit->explanation = $request->deskripsi;
    $unit->save();

    return redirect()->back()->with('success', 'Sub Materi berhasil diubah!');
}

public function hapusUnit($id)
    {
        $unit = unit::findOrFail($id);

        // Delete related models
        $unit->level()->delete();

        // Then delete the main unit
        $unit->delete();

        return redirect()->back()->with('success', 'Sub Materi berhasil dihapus!');
    }
}
