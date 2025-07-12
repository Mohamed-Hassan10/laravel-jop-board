<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
  protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'content' => $this->faker->sentence,
            'author' => $this->faker->name
        ];
    }
}
