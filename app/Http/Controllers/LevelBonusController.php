<?php

namespace App\Http\Controllers;

use App\Models\LevelBonus;
use App\Models\SoalBonus;
use App\Models\UnitBonus;
use Illuminate\Http\Request;

class LevelBonusController extends Controller
{
    public function getLevel(Request $request, $id)
  {
    $id_materi = $request->route('id');

    $lBonus = UnitBonus::where('id_materi', $id_materi)
      ->join('level_bonus', 'level_bonus.id_unit_bonus', '=', 'unit_bonus.id_unit_bonus')
      ->join('question_level_bonus', 'level_bonus.id_level_bonus', '=', 'question_level_bonus.id_level_bonus')
      ->select('question_level_bonus.*')
      ->get();

    return view('kelola-materi.kelola-level-bonus', compact('lBonus', 'id_materi'));
  }


  public function tambahBonus(Request $request, $id)
  {

    $request->validate([
      'soal' => 'required',
      'pilihan1' => 'required',
      'pilihan2' => 'required',
      'pilihan3' => 'required',
      'pilihan4' => 'required',
      'jawaban' => 'required',
    ]);

    $unitBonus = UnitBonus::where('id_materi', $id)->first();

    $levelB = new LevelBonus();
    $levelB->id_unit_Bonus = $unitBonus->id_unit_Bonus;
    $levelB->save();


    $soalB = new SoalBonus();
    $soalB->question = $request->soal;
    $soalB->option_1 = $request->pilihan1;
    $soalB->option_2 = $request->pilihan2;
    $soalB->option_3 = $request->pilihan3;
    $soalB->option_4 = $request->pilihan4;
    $soalB->correct_index = $request->jawaban;
    $soalB->id_level_bonus =  $levelB->id_level_bonus;
    $soalB->save();

    return redirect()->back()->with('success', 'Soal Level Bonus berhasil disimpan!');
  }

  public function ubahBonus(Request $request, $id)
  {
    $request->validate([
      'soal' => 'required',
      'pilihan1' => 'required',
      'pilihan2' => 'required',
      'pilihan3' => 'required',
      'pilihan4' => 'required',
      'jawaban' => 'required',
    ]);

    $sBonus = SoalBonus::findOrFail($id);

    $sBonus->question = $request->soal;
    $sBonus->option_1 = $request->pilihan1;
    $sBonus->option_2 = $request->pilihan2;
    $sBonus->option_3 = $request->pilihan3;
    $sBonus->option_4 = $request->pilihan4;
    $sBonus->correct_index = $request->jawaban;

    // Save the changes to the database
    $sBonus->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Soal Level Bonus berhasil diubah!');
  }

  public function hapusBonus(Request $request, $id)
  {
    $soalBonus = SoalBonus::findOrFail($id);

    $soalBonus->delete();

    return redirect()->back()->with('success', 'Soal Level Akhir berhasil dihapus!');
  }
}
