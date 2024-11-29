<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Hole;
use App\Models\Tournament;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tournament_id' => Tournament::factory(),
            'hole_id' => Hole::factory(),
            'name' => $this->faker->name(),
            'rating' => $this->faker->randomFloat(0, 0, 9999999999.),
            'slope' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tees' => $this->faker->word(),
        ];
    }
}
