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
            'par' => $this->faker->numberBetween(-10000, 10000),
            'slope' => $this->faker->numberBetween(-10000, 10000),
            'front_tee_rating' => $this->faker->randomFloat(2, 0, 999.99),
            'middle_tee_rating' => $this->faker->randomFloat(2, 0, 999.99),
            'back_tee_rating' => $this->faker->randomFloat(2, 0, 999.99),
            'front_tee_yardage' => $this->faker->numberBetween(-10000, 10000),
            'middle_tee_yardage' => $this->faker->numberBetween(-10000, 10000),
            'back_tee_yardage' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
