<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'material_video';
    protected $primaryKey = 'id_material_video';
    protected $guarded = ['id_material_video'];

    public $timestamps = false;

    public function level() {
        return $this->belongsTo(level::class, 'id_level');
    }
}
