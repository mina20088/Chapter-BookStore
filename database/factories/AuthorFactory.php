<?php

namespace Database\Factories;

use App\Enums\Nationality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
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
            'middle_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'DOB' => $this->faker->date(),
            'death_date' => $this->faker->date(),
            'bio' => $this->faker->text(),
            'nationality' => $this->faker->randomElement(Nationality::class),
            'website' => $this->faker->url(),
            'image' => $this->faker->imageUrl(500, 500, 'person', true, 'Faker', true),
        ];
    }
}
