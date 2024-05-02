<?php

namespace App\Http\Controllers;

use App\Models\ScorePreTest;
use Illuminate\Http\Request;

use App\Models\User;

class ScorePreTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pretest()
    {
        $users = User::all(); // Get all users

        // Loop through each user to calculate and store the total score
        foreach ($users as $user) {
            $totalPretest = ScorePreTest::where("id_user", $user->id_user)->sum('score');
            $user->total_pretest = $totalPretest; // Add total score as a new attribute to the user
            $user->save(); // Save the user model
        }

        return view('akun-siswa.akun-siswa', compact('users')); // Return the view with users data
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
