<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\SoalPretest;
use App\Models\Pretest;
use App\Models\unit;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getLevel(Request $request, $id) {
        $id_unit = $request->route('id');

        $levels = Level::where('id_unit', $id_unit)
            ->join('pretest', 'level.id_level', '=', 'pretest.id_level')
            ->join('question_pretest', 'pretest.id_pretest', '=', 'question_pretest.id_pretest')
            ->select('question_pretest.*')
            ->get();

        return view('kelola-materi.kelola-materi-level', compact('levels', 'id_unit'));
    }

    public function tambahPretest(Request $request, $id) {

        $request->validate([
            'soal' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'pilihan3' => 'required',
            'pilihan1' => 'required',
            'jawaban' => 'required',
        ]);

        $unit = unit::where('id_unit',$id)->first();

        $level = new level();
        $level->id_unit = $id;
        $level->id_materi = $unit->id_materi;
        $level->level_number = 1;
        $level->save();

        $preTest = new Pretest();
        $preTest->id_level = $level->id_level;
        $preTest->save();

        $qPreTest = new SoalPretest();
        $qPreTest->question = $request->soal;
        $qPreTest->option_1 = $request->pilihan1;
        $qPreTest->option_2 = $request->pilihan2;
        $qPreTest->option_3 = $request->pilihan3;
        $qPreTest->option_4 = $request->pilihan4;
        $qPreTest->correct_index = $request->jawaban;
        $qPreTest->id_pretest = $preTest->id_pretest;
        $qPreTest->save();

        return redirect()->back()->with('success', 'Soal Pre-Test berhasil disimpan!');
    }

    public function ubahPretest(Request $request, $id)
    {
      $request->validate([
        'soal' => 'required',
        'pilihan1' => 'required',
        'pilihan2' => 'required',
        'pilihan3' => 'required',
        'pilihan4' => 'required',
        'jawaban' => 'required',
      ]);
    
      // Find the SoalPretest record to update based on the id
      $qPreTest = SoalPretest::findOrFail($id);
    
      // Update the question and answer options
      $qPreTest->question = $request->soal;
      $qPreTest->option_1 = $request->pilihan1;
      $qPreTest->option_2 = $request->pilihan2;
      $qPreTest->option_3 = $request->pilihan3;
      $qPreTest->option_4 = $request->pilihan4;
      $qPreTest->correct_index = $request->jawaban;
    
      // Save the changes to the database
      $qPreTest->save();
    
      // Redirect back with a success message
      return redirect()->back()->with('success', 'Soal Pre-Test berhasil diubah!');
    }

    public function hapusPretest(Request $request, $id)
    {
      $qPreTest = SoalPretest::findOrFail($id);
    
      $qPreTest->delete();
    
      return redirect()->back()->with('success', 'Soal Pre-Test berhasil dihapus!');
    }
}
