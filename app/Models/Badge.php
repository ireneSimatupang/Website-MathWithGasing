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
        return $this->hasMany(Lencana::class,'id_badge' ,'id_LencanaPengguna');
    }

    public function materi() {
        return $this->belongsTo(Materi::class, 'id_materi');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
