<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'order_id' => Order::factory(),
             'estimated_delivery_date' => $this->faker->date(),
             'delivery_date' => $this->faker->date(),
             'status' => $this->faker->randomElement(OrderStatus::class),
             'cost' => $this->faker->randomFloat(10),
        ];
    }
}
