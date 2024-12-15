<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Regional;

class RegionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Regional::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['2A Smith Center', '3A Hesston', '4A Winfield', '5A Hays', '6A Wichita North']),
            'timestamp' => $this->faker->word(),
        ];
    }
}
