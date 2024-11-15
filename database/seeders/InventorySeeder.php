<?php

namespace Database\Seeders;

use App\Enums\BookConditions;
use App\Models\Book;
use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::all();

        foreach ($books as $book)
        {
            Inventory::factory()->create(
                [
                    'book_id' => $book->id,
                ]
            );
        }
    }
}
