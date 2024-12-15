<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Hole;

class HoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hole::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'course_id' => $this->faker->numberBetween(1, 100),
            'hole_number' => $this->faker->numberBetween(1, 18),
            'par' => $this->faker->numberBetween(3, 5),
            'distance_red' => $this->faker->numberBetween(700, 1000),
            'distance_white' => $this->faker->numberBetween(700, 1000),
            'distance_blue' => $this->faker->numberBetween(700, 1000),
        ];
    }
}
