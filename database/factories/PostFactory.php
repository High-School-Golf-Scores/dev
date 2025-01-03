<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => 'First Tournament Results',
            'content' => 'We started out great, Tom shot his best score ever...',
            'remark' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'user_id' => User::factory(),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
