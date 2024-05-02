<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;
    protected $table = 'badge';
    protected $primaryKey = 'id_badge';
    protected $fillable = ['image','explanation','id_penggunaWeb','id_materi','id_posttest'];
}
