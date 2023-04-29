<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(['role' => 1]),
            'title' => fake()->text(20),
            'description' => fake()->text(800),
            'salary_from' => fake()->numberBetween(100, 500),
            'salary_to' => fake()->numberBetween(200, 5000)
        ];
    }
}
