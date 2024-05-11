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
        return $this->belongsTo(Materi::class, 'id_materi', 'id_statistic');
    }


}
