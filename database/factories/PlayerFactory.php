<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Card;
use App\Models\Player;
use App\Models\School;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'school_id' => School::factory(),
            'card_id' => Card::factory(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'grad_year' => $this->faker->numberBetween(-10000, 10000),
            'active' => $this->faker->boolean(),
        ];
    }
}
