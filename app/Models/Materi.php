<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'Materi';
    protected $primaryKey = 'id_materi';
    protected $fillable = ['id_penggunaweb','title','imageCard','imageBackground', 'imageCardAdmin', 'imageStatistic'];
    
}
