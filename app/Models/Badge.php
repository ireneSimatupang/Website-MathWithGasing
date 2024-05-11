<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;
    protected $table = 'badge';
    protected $primaryKey = 'id_badge';
    protected $guarded = ['id_badge'];

    public $timestamps = false;

    public function lencana() {
        return $this->belongsTo(Lencana::class, 'id_LencanaPengguna');
    }
    public function badge() {
        return $this->belongsTo(Badge::class, 'id_badge');
    }
    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi');
    }
}
