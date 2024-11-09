<?php

namespace Database\Factories;

use App\Models\Book;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory(),
            'book_id' => Book::factory(),
            'title' => fake()->randomElement(['bad', 'good', 'medium', 'very-good', 'perfect']),
            'ratings' => fake()->numberBetween(1, 5),
        ];
    }
}
