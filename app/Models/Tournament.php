<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tournament extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'coach_id',
        'name',
        'date',
        'course_id',
        'start_time',
        'start_type',
        'start_interval',
        'type',
        'starting_hole',
        'event',
        'sub_tournament',
        'tie_breaker',
        'format',
        'cards',
        'rounds',
        'levels',
        'rules',
        'alert',
        'sponsor',
        'flights',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'coach_id' => 'integer',
        'date' => 'date',
    ];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    public function rounds(): HasMany
    {
        return $this->hasMany(Round::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }
}
