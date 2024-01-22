<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        
        $userIds = User::pluck('id')->toArray();
        $feedbackIds = Feedback::pluck('id')->toArray();

        return [
            'comment' => fake()->paragraph(),
            'user_id' => fake()->randomElement($userIds),
            'feedback_id' => fake()->randomElement($feedbackIds),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
