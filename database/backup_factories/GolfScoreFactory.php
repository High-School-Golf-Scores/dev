<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GolfScore;
use App\Models\Player;
use App\Models\School;
use App\Models\Tournament;

class GolfScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GolfScore::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tournament_id' => Tournament::factory(),
            'player_id' => Player::factory(),
            'school_id' => School::factory(),
            'hole_number' => $this->faker->numberBetween(1, 18),
            'score' => $this->faker->numberBetween(1, 12),
        ];
    }
}
