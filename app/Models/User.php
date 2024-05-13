<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user'; // Nama tabel
    protected $primaryKey = 'id_user'; // Kunci utama
    protected $fillable = ['name', 'email', 'password', 'gender', 'status']; // Kolom yang bisa diisi

    public $total_score;
    public $total_pretest;

    public $timestamps = true;

    public function scorePostTest()
    {
        return $this->hasMany(ScorePostTest::class, 'id_user', 'id_user');
    }

    public function scorePreTest()
    {
        return $this->hasMany(ScorePreTest::class, 'id_user', 'id_user');
    }

    public function lencana()
    {
        return $this->hasMany(Lencana::class, 'id_user', 'id_LencanaPengguna');
    }

    public function badge()
    {
        return $this->hasMany(Badge::class, 'id_user', 'id_badge');
    }

    public function lencanaCount()
    {
      return $this->lencana()->count();
    }
}
