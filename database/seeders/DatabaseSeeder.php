<?php

namespace Database\Seeders;

use App\Enums\OrderStatus;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\OrderFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Schema::disableForeignKeyConstraints();
         User::truncate();
         Author::truncate();
         Book::truncate();
         Genre::truncate();
         Publisher::truncate();
         Order::truncate();

         User::factory()->hasAttached(Book::factory(2),[
             'order_status' => OrderStatus::OnHold,
             'quantity' => 10,
             'price' => 120
         ])->create();
    }
}
