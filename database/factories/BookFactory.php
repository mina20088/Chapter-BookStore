<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /*
     *  'genre_id',
        'publisher_id',
        'title',
        'ISBN',
        'cover_image',
        'description',
        'excrept',
        'format',
        'pages',
        'language',
        'publication_date',
     * */
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'genre_id' => GenreFactory::new(),
            'publisher_id' => PublisherFactory::new(),
            'title' => $this->faker->sentence(3),
            'slug' => fake()->slug(),
            'ISBN' => $this->faker->isbn13(),
            'cover_image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'excrept' => $this->faker->sentence(3),
            'format' => $this->faker->randomElement(['pdf', 'doc', 'docx']),
            'pages' => $this->faker->numberBetween(1, 100),
            'language' => $this->faker->languageCode(),
            'publication_date' => $this->faker->date(),
        ];
    }
}
