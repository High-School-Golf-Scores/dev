<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function archive()
    {
        $this->is_archived = true;
        $this->save();
    }

    protected $guarded = [];
}
