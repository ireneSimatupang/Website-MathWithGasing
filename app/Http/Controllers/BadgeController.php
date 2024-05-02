<?php

namespace App\Http\Controllers;
use App\Models\Badge;

use Illuminate\Http\Request;

class BadgeController extends Controller
{
    public function manageBadge()
    {
        $badges = Badge::all();

        return view('lencana-siswa.lencana-siswa', compact('badges'));

    }
}
