<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;

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
            'name' => $this->faker->name(),
            'par' => $this->faker->numberBetween(3, 5),
            'slope' => $this->faker->numberBetween(107, 130),
            'front_tee_rating' => $this->faker->randomFloat(1, 66.0, 69.8),
            'middle_tee_rating' => $this->faker->randomFloat(1, 67.9, 72.2),
            'back_tee_rating' => $this->faker->randomFloat(1, 69.7, 76.1),
            'front_tee_yardage' => $this->faker->numberBetween(4200, 5400),
            'middle_tee_yardage' => $this->faker->numberBetween(5100, 5600),
            'back_tee_yardage' => $this->faker->numberBetween(5600, 7200),
        ];
    }
}
