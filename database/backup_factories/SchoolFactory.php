<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Classification;
use App\Models\League;
use App\Models\Regional;
use App\Models\School;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'regional_id' => Regional::factory(),
            'classification_id' => Classification::factory(),
            'league_id' => League::factory(),
            'name' => $this->faker->randomElement(['Smith Center', 'Hutchinson', 'Washburn Rural', 'Hesston']),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => 'KS',
            'zip' => '66967',
            'paid' => $this->faker->boolean(),
        ];
    }
}
