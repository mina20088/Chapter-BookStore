<?php

namespace Database\Factories;

use App\Enums\AuthorsEnum;
use App\Enums\Nationality;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'slug' => fake()->slug(),
            'middle_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'DOB' => $this->faker->date(),
            'death_date' => $this->faker->date(),
            'bio' => $this->faker->text(),
            'nationality' => $this->faker->randomElement(Nationality::class),
            'website' => $this->faker->url(),
            'image' => $this->faker->randomElement(AuthorsEnum::class)
        ];
    }
}
