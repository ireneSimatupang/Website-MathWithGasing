<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\SoalPretest;
use App\Models\SoalPosttest;
use App\Models\Pretest;
use App\Models\Posttest;
use App\Models\unit;
use App\Models\Video;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getLevel(Request $request, $id) {
        $id_unit = $request->route('id');
        
        $qPretest = Level::where('id_unit', $id_unit)
            ->join('pretest', 'level.id_level', '=', 'pretest.id_level')
            ->join('question_pretest', 'pretest.id_pretest', '=', 'question_pretest.id_pretest')
            ->select('question_pretest.*')
            ->get();

        $qPosttest = Level::where('id_unit', $id_unit)
        ->join('posttest', 'level.id_level', '=', 'posttest.id_level')
        ->join('question_posttest', 'posttest.id_posttest', '=', 'question_posttest.id_posttest')
        ->select('question_posttest.*')
        ->get();

        $video = Level::where('id_unit', $id_unit)
        ->join('material_video', 'level.id_level', '=', 'material_video.id_level')
        ->select('material_video.*')
        ->get();

        return view('kelola-materi.kelola-materi-level', compact('qPretest', 'qPosttest', 'video','id_unit'));
    }

    public function tambahPretest(Request $request, $id) {

        $request->validate([
            'soal' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'pilihan3' => 'required',
            'pilihan4' => 'required',
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


    public function tambahPosttest(Request $request, $id) {

        $request->validate([
            'soal' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'pilihan3' => 'required',
            'pilihan4' => 'required',
            'jawaban' => 'required',
        ]);

        $unit = unit::where('id_unit',$id)->first();

        $level = new level();
        $level->id_unit = $id;
        $level->id_materi = $unit->id_materi;
        $level->level_number = 3;
        $level->save();

        $postTest = new Posttest();
        $postTest->id_level = $level->id_level;
        $postTest->save();

        $qPostTest = new SoalPosttest();
        $qPostTest->question = $request->soal;
        $qPostTest->option_1 = $request->pilihan1;
        $qPostTest->option_2 = $request->pilihan2;
        $qPostTest->option_3 = $request->pilihan3;
        $qPostTest->option_4 = $request->pilihan4;
        $qPostTest->correct_index = $request->jawaban;
        $qPostTest->id_posttest = $postTest->id_posttest;
        $qPostTest->save();

        return redirect()->back()->with('success', 'Soal Post-Test berhasil disimpan!');
    }

    public function ubahPosttest(Request $request, $id)
    {
      $request->validate([
        'soal' => 'required',
        'pilihan1' => 'required',
        'pilihan2' => 'required',
        'pilihan3' => 'required',
        'pilihan4' => 'required',
        'jawaban' => 'required',
      ]);
    
      // Find the SoalPosttest record to update based on the id
      $qPostTest = SoalPosttest::findOrFail($id);
    
      // Update the question and answer options
      $qPostTest->question = $request->soal;
      $qPostTest->option_1 = $request->pilihan1;
      $qPostTest->option_2 = $request->pilihan2;
      $qPostTest->option_3 = $request->pilihan3;
      $qPostTest->option_4 = $request->pilihan4;
      $qPostTest->correct_index = $request->jawaban;
    
      // Save the changes to the database
      $qPostTest->save();
    
      // Redirect back with a success message
      return redirect()->back()->with('success', 'Soal Post-Test berhasil diubah!');
    }

    public function hapusPosttest(Request $request, $id)
    {
      $qPostTest = SoalPosttest::findOrFail($id);
    
      $qPostTest->delete();
    
      return redirect()->back()->with('success', 'Soal Post-Test berhasil dihapus!');
    }

    public function tambahVideo(Request $request, $id) {

      $request->validate([
          'judul' => 'required',
          'deskripsi' => 'required',
          'video' => 'required'
      ]);

      $unit = unit::where('id_unit',$id)->first();

      $level = new level();
      $level->id_unit = $id;
      $level->id_materi = $unit->id_materi;
      $level->level_number = 2;
      $level->save();

      $video = new Video();
      $video->video_Url = $request->video;
      $video->title = $request->judul;
      $video->explanation = $request->deskripsi;
      $video->id_level = $level->id_level;
      $video->save();

      return redirect()->back()->with('success', 'Video berhasil disimpan!');
  }

  public function ubahVideo(Request $request, $id)
    {
      $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'video' => 'required'
    ]);
    
      // Find the SoalPosttest record to update based on the id
      $video = Video::findOrFail($id);
    
      // Update the question and answer options
      $video->video_Url = $request->video;
      $video->title = $request->judul;
      $video->explanation = $request->deskripsi;
      $video->save();
    
      // Redirect back with a success message
      return redirect()->back()->with('success', 'Video berhasil diubah!');
    }

    public function hapusVideo(Request $request, $id)
    {
      $video = Video::findOrFail($id);
    
      $video->delete();
    
      return redirect()->back()->with('success', 'Video berhasil dihapus!');
    }


}
