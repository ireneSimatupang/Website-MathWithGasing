<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posttest extends Model
{
    use HasFactory;
    protected $table = 'posttest';
    protected $primaryKey = 'id_posttest';
    protected $fillable = ['id_level'];

    public function level() {
        return $this->belongsTo(level::class, 'id_level');
    }

}
