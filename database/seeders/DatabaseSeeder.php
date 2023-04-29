<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vacancy;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Test developer account
        \App\Models\User::factory()->create([
            'role' => 0
        ]);

        // Test recruiter account
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 1,
        ]);

        Vacancy::factory(10)->create();

        $vacancy_id = Vacancy::first();

        Category::create([
            'vacancy_id' => $vacancy_id->id,
            'type' => 'programming_language',
            'name' => 'PHP' 
        ]);

        Category::create([
            'vacancy_id' => $vacancy_id->id,
            'type' => 'programming_language',
            'name' => 'JavaScript' 
        ]);

        Category::create([
            'vacancy_id' => $vacancy_id->id,
            'type' => 'programming_language',
            'name' => 'Laravel' 
        ]);
    }
}
