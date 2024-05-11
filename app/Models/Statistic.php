<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table = 'statistic';
    protected $primaryKey = 'id_statistic';
    protected $guarded = ['id_statistic'];

    public $timestamps = false;

    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi', 'id_statistic');
    }

}
