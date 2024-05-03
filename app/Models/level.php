<?php

namespace App\Models;

use App\Models\Models\Materi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;

    protected $table = 'level';
    protected $primaryKey = 'id_level';
    protected $fillable = ['id_materi','level_number','id_unit'];
    
    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi');
    }

    public function unit() {
        return $this->belongsTo(unit::class, 'id_unit');
    }

    public function posttest()
    {
        return $this->hasMany(Posttest::class, 'id_level', 'id_posttest');
    }
}
