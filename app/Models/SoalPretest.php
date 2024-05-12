<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalPretest extends Model
{
    use HasFactory;

    protected $table = 'question_pretest';
    protected $primaryKey = 'id_question_pretest';
    protected $guarded = ['id_question_pretest'];

    public $timestamps = false;

    public function pretest() {
        return $this->belongsTo(Pretest::class, 'id_pretest');
    }
}
