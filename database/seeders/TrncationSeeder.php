<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TrncationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                Schema::disableForeignKeyConstraints();
                Book::truncate();
                User::truncate();
                Author::truncate();
                Book::truncate();
                Genre::truncate();
                Publisher::truncate();
                Order::truncate();
                DB::table('order_items')->truncate();
                DB::table('book_author')->truncate();
    }
}
