<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use JetBrains\PhpStorm\NoReturn;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    #[NoReturn]
    public function run(): void
    {
        Book::factory(6)->createMany([
            ['genre_id' => 2 , 'publisher_id' => 3 , 'title' => "Silence" , 'cover_image' => "storage/images/books/silence.jpg" , 'description' => "Silence is a novel by <NAME> that tells the story of a young boy who is raised by his mother's abusive father."]
        ]);
    }
}
