<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelBonus extends Model
{
    use HasFactory;

    protected $table = 'level_bonus';
    protected $primaryKey = 'id_level_bonus';
    protected $guarded = ['id_level_bonus'];

    public $timestamps = false;

    public function unitBonus() {
        return $this->belongsTo(UnitBonus::class, 'id_unit_Bonus');
    }

    public function soalBonus() {
        return $this->hasMany(SoalBonus::class, 'id_level_bonus','id_question_level_bonus');
    }
}
