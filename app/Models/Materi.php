<?php

namespace App\Models;

use App\Models\level;
use App\Models\unit;
use App\Models\Badge;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $primaryKey = 'id_materi';
    protected $fillable = ['id_penggunaweb','title','imageCard','imageBackground', 'imageCardAdmin', 'imageStatistic'];
    
    public function badge()
    {
        return $this->hasMany(Badge::class, 'id_materi', 'id_badge');
    }

    public function unit()
    {
        return $this->hasMany(unit::class, 'id_materi', 'id_unit');
    }

    public function level()
    {
        return $this->hasMany(level::class, 'id_materi', 'id_level');
    }
}
