<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->callOnce([
            GenreSeeder::class,
            PublisherSeeder::class,
        ]);

        $Authors = Author::factory(2)->create();

        $book_1= Book::create([
            "title" => "Accusantium eaque quae.",
            "genre_id" => 1,
            "publisher_id" => 1,
            "ISBN" => "9785676242268",
            "cover_image" =>
                "https://via.placeholder.com/640x480.png/00cc99?text=voluptatem",
            "description" =>
                "Sapiente vel ea recusandae qui dolores ducimus veritatis eligendi. Quibusdam dolorem dolorem praesentium velit voluptas ad. Ratione suscipit aut exercitationem.",
            "excrept" => "Explicabo pariatur.",
            "format" => "pdf",
            "pages" => 15,
            "language" => "EN",
            "publication_date" => "1987-03-04"
        ])->authors()->attach($Authors->pluck('id'));

        $author_1 = Author::factory(1)->create();

        $book_2 = $book_2 = Book::create([
            "title" => "The Mysteries of Time.",
            "genre_id" => 2,
            "publisher_id" => 2,
            "ISBN" => "9781234567890",
            "cover_image" => "https://via.placeholder.com/640x480.png/ff5733?text=mystery",
            "description" => "An intriguing journey through the fabric of time, exploring the unknown and the unseen. A tale of adventure and discovery.",
            "excrept" => "Time waits for no one.",
            "format" => "epub",
            "pages" => 320,
            "language" => "EN",
            "publication_date" => "2024-09-26"
        ])->authors()->attach($author_1->pluck('id'));


    }
}
