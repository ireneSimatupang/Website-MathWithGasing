<?php

namespace App\Models;

use App\Models\Models\Materi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'penggunaweb';
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
