<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id',
        'first_name',
        'last_name',
        'grad_year',
        'active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_id' => 'integer',
        'active' => 'boolean',
    ];



    public function stats(): HasMany
    {
        return $this->hasMany(Stat::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function coach()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function render()
    {
        $players = Player::where('school_id', auth()->user()->school_id)->get();
        return view('livewire.players', ['players' => $players]);
    }
}
