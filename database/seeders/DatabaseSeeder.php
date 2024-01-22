<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory(10)->create();

        
        \App\Models\Category::factory()->create([
            'name' => 'Bug Report',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Database Data Issue',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Other Issue',
        ]);

        \App\Models\Feedback::factory(25)->create();

        \App\Models\Comment::factory(200)->create();


    }
}
