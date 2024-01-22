<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    public function definition(): array
    {

        $userIds = User::pluck('id')->toArray();
        $categoryIds = Category::pluck('id')->toArray();

        return [
            'title' => fake()->sentence(),
            'user_id' => fake()->randomElement($userIds),
            'category_id' => fake()->randomElement($categoryIds),
            'is_solved' => false,
            'description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
