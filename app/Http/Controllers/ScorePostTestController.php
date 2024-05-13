<?php

namespace App\Http\Controllers;

use App\Models\Lencana;
use App\Models\ScorePostTest;
use Illuminate\Http\Request;

use App\Models\User;

class ScorePostTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('Lencana')->where('status', '1')->get(); 

        // Loop through each user to calculate and store the total score
        foreach ($users as $user) {
          $totalScore = ScorePostTest::where("id_user", $user->id_user)->sum('score');
          $user->total_score = $totalScore; // Add total score as a new attribute to the user
          $user->save(); // Save the user model
        }


        $userLencana = [];
        foreach ($users as $user) {
          $userLencana[$user->id_user] = $user->lencana->count();
        }

        
      
        return view('pencapaian-siswa.kelola-pencapaian', compact('users', 'userLencana'));
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
