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
        $book_1 = Book::factory(1)
            ->hasAttached(Author::factory()->count(2))
            ->create();
        $book_2 = Book::factory(1)
            ->hasAttached(Author::factory()->count(1))
            ->create();
    }
}
