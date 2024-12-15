<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Coach;
use App\Models\Tournament;

class TournamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tournament::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'coach_id' => Coach::factory(),
            'name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'course_id' => $this->faker->numberBetween(1, 100),
            'start_time' => $this->faker->time(),
            'start_type' => $this->faker->numberBetween(1, 7),
            'start_interval' => $this->faker->time(),
            'type' => $this->faker->numberBetween(1, 4),
            'starting_hole' => $this->faker->numberBetween(1, 18),
            'tees' => $this->faker->numberBetween(1, 18),
            'sub_tournament' => $this->faker->word(),
            'tie_breaker' => $this->faker->numberBetween(1, 2),
            'format' => $this->faker->numberBetween(1, 4),
            'cards' => $this->faker->numberBetween(1, 100),
            'rounds' => $this->faker->numberBetween(1, 2),
            'levels' => $this->faker->numberBetween(1, 2),
            'rules' => $this->faker->text(),
            'alert' => $this->faker->word(),
            'sponsor' => $this->faker->word(),
            'flights' => $this->faker->numberBetween(1, 4),
        ];
    }
}
