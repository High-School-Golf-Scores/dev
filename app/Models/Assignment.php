<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
