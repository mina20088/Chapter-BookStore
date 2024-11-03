<?php

namespace Database\Factories;

use App\Enums\Nationality;
use App\Enums\PublisherType;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            'slug' => fake()->slug(),
            'nationality' => $this->faker->randomElement(Nationality::class),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'address_1' => $this->faker->address(),
            'type' => $this->faker->randomElement(PublisherType::class),
            'website_url' => $this->faker->url(),
            'year-founded' => $this->faker->year(),
            'comments' => $this->faker->text(),
        ];
    }
}
