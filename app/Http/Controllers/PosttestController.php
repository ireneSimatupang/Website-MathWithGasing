<?php

namespace App\Http\Controllers;

use App\Models\Posttest;
use Illuminate\Http\Request;

class PosttestController extends Controller
{
    public function managePosttest()
    {
        $posttess = Posttest::all();

        return view('lencana-siswa.lencana-siswa', compact('posttess'));
    }
}
