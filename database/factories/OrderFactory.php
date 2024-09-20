<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date' => $this->faker->date(),
            'user_id' => User::factory(),
            'order_status' => $this->faker->randomElement(OrderStatus::class),
        ];
    }
}
