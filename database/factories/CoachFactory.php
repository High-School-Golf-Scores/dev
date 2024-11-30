<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Coach;
use App\Models\School;

class CoachFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coach::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'school_id' => School::factory(),
            'name' => $this->faker->name(),
            'active' => $this->faker->word(),
        ];
    }
}
