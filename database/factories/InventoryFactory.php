<?php

namespace Database\Factories;

use App\Enums\BookConditions;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::factory(),
            'condition' => $this->faker->randomElement(BookConditions::class),
            'discount_id' => $this->faker->numberBetween(1,100),
            'quantity' => $this->faker->numberBetween(1,100),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
