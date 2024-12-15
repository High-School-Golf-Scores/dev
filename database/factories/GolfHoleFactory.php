<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GolfHole;

class GolfHoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GolfHole::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'course_id' => $this->faker->numberBetween(1, 100),
            'hole_number' => $this->faker->numberBetween(1, 18),
            'par' => $this->faker->numberBetween(3, 5),
            'distance_red' => $this->faker->numberBetween(101, 450),
            'distance_white' => $this->faker->numberBetween(129, 520),
            'distance_blue' => $this->faker->numberBetween(145, 570),
        ];
    }
}
