<?php

namespace App\Http\Controllers;

use App\Models\Materi;

class MateriController extends Controller
{
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
    
}
