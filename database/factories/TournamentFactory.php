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
            'course_id' => $this->faker->numberBetween(-10000, 10000),
            'start_time' => $this->faker->time(),
            'start_type' => $this->faker->numberBetween(-10000, 10000),
            'start_interval' => $this->faker->time(),
            'type' => $this->faker->numberBetween(-10000, 10000),
            'starting_hole' => $this->faker->numberBetween(-10000, 10000),
            'event' => $this->faker->word(),
            'sub_tournament' => $this->faker->word(),
            'tie_breaker' => $this->faker->numberBetween(-10000, 10000),
            'format' => $this->faker->numberBetween(-10000, 10000),
            'cards' => $this->faker->numberBetween(-10000, 10000),
            'rounds' => $this->faker->numberBetween(-10000, 10000),
            'levels' => $this->faker->numberBetween(-10000, 10000),
            'rules' => $this->faker->text(),
            'alert' => $this->faker->word(),
            'sponsor' => $this->faker->word(),
            'flights' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
