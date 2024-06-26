<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lencana extends Model
{
    use HasFactory;
    protected $table = 'lencana_pengguna';
    protected $primaryKey = 'id_LencanaPengguna';
    protected $fillable = ['id_badge', 'id_user'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function badge()
    {
        return $this->hasMany(Badge::class, 'id_LencanaPengguna', 'id_badge');
    }
}
