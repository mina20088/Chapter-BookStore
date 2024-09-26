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

        Book::create([
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
    }
}
