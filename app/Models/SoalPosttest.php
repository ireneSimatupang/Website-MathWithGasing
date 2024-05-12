<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalPosttest extends Model
{
    use HasFactory;

    protected $table = 'question_posttest';
    protected $primaryKey = 'id_question_posttest';
    protected $guarded = ['id_question_posttest'];

    public $timestamps = false;

    public function posttest() {
        return $this->belongsTo(Posttest::class, 'id_posttest');
    }
}
