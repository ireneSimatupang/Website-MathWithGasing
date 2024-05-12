<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    use HasFactory;

    protected $table = 'pretest';
    protected $primaryKey = 'id_pretest';
    protected $fillable = ['id_level'];

    public $timestamps = false;

    public function qPretest()
    {
        return $this->hasMany(SoalPretest::class, 'id_pretest', 'id_question_pretest');
    }

    public function level() {
        return $this->belongsTo(level::class, 'id_level');
    }

}
