<?php

namespace App\Http\Controllers;

use App\Models\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function manageMateri()
    {
        $materis = Materi::all();

        return view('lencana-siswa.lencana-siswa', compact('materis'));
    }
    
}