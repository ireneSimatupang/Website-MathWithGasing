<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalBonus extends Model
{
    use HasFactory;

    protected $table = 'question_level_bonus';
    protected $primaryKey = 'id_question_level_bonus';
    protected $guarded = ['id_question_level_bonus'];

    public $timestamps = false;

    public function levelBonus() {
        return $this->belongsTo(SoalBonus::class, 'id_level_bonus');
    }
}
