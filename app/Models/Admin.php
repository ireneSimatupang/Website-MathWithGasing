<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id_penggunaWeb';
    public $incrementing = false;
    protected $fillable = [
        'role_id', 
        'name', 
        'email', 
        'kontak', 
        'password', 
        'gender', 
        'status', 
        'is_approved'      
    ];

    public function badge()
    {
        return $this->hasMany(Badge::class, 'id_penggunaWeb', 'id_badge');
    }
    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_penggunaWeb', 'id_materi');
    }
}
