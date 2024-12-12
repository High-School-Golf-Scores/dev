<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GolfScore extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'player_id', 'school_id', 'hole_number', 'score'];
}
