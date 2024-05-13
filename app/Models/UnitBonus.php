<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitBonus extends Model
{
    use HasFactory;
    protected $table = 'unit_bonus';
    protected $primaryKey = 'id_unit_Bonus';
    protected $guarded = ['id_unit_Bonus'];

    public $timestamps = false;

    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi');
    }

    public function levelBonus() {
        return $this->hasMany(LevelBonus::class, 'id_unit_Bonus', 'id_level_bonus');
    }




}
