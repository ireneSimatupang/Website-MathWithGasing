<?php

namespace App\Http\Controllers;

use App\Models\Lencana;
use Illuminate\Http\Request;

class LencanaController extends Controller
{
    public function manageLencana()
    {
        $lencanas = Lencana::all();

        return view('lencana-siswa.lencana-siswa', compact('lencanas'));
    }
}
