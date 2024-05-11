<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;
    protected $table = 'unit';
    protected $primaryKey = 'id_unit';
    protected $fillable = ['explanation','id_materi','title'];

    public $timestamps = false;
    
    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi');
    }

    public function level()
    {
        return $this->hasMany(level::class, 'id_unit', 'id_level');
    }
}
