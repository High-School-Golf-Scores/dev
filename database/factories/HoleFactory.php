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
            'course_id' => Course::factory(),
            'number' => $this->faker->numberBetween(-10000, 10000),
            'par' => $this->faker->numberBetween(-10000, 10000),
            'distance' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
