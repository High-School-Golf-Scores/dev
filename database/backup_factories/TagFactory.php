<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\School;
use App\Models\Tag;
use App\Models\Tournament;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'school_id' => School::factory(),
            'tournament_id' => Tournament::factory(),
            'name' => $this->faker->city(),
            'timestamp' => \Symfony\Component\Clock\now(),
        ];
    }
}
