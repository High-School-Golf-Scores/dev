<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'par',
        'slope',
        'front_tee_rating',
        'middle_tee_rating',
        'back_tee_rating',
        'front_tee_yardage',
        'middle_tee_yardage',
        'back_tee_yardage',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'front_tee_rating' => 'decimal:1',
        'middle_tee_rating' => 'decimal:1',
        'back_tee_rating' => 'decimal:1',
    ];

    public function holes(): HasMany
    {
        return $this->hasMany(Hole::class);
    }

    public function tees(): HasMany
    {
        return $this->hasMany(Tees::class);
    }

    public function tournaments(): HasMany
    {
        return $this->hasMany(Tournament::class);
    }
}
