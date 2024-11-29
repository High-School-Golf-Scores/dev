<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Card;
use App\Models\Round;
use App\Models\Tournament;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tournament_id' => Tournament::factory(),
            'round_id' => Round::factory(),
            'starting_hole' => $this->faker->numberBetween(-10000, 10000),
            'tee_time' => $this->faker->word(),
            'comment' => $this->faker->word(),
        ];
    }
}
