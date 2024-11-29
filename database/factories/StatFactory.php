<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Player;
use App\Models\Stat;

class StatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stat::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'player_id' => Player::factory(),
            'gir' => $this->faker->numberBetween(-10000, 10000),
            'putts' => $this->faker->numberBetween(-10000, 10000),
            'fairways' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
