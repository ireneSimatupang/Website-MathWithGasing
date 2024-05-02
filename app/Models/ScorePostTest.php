<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScorePostTest extends Model
{
    use HasFactory;

    protected $table = "score_posttest";

    protected $guarded = ['id_ScorePostTest'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
