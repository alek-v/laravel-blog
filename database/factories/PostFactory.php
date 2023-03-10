<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Create new user and use user id
            'category_id' => Category::factory(), // Create new category and use category id
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraph
        ];
    }
}
