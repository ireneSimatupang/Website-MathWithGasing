<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function manageLevel()
    {
        $levels = level::all();

        return view('lencana-siswa.lencana-siswa', compact('levels'));
    }
}
