<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScorePreTest extends Model
{
    use HasFactory;

    protected $table = "score_pretest";

    protected $guarded = ['id_ScorePreTest'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
