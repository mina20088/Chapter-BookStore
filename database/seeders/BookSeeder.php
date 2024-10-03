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
            ['genre_id' => 2 , 'publisher_id' => 3 , ]
        ]);
    }
}
