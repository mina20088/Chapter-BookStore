<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncationSeeder extends Seeder
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
                Address::truncate();
                Shipment::truncate();
                Inventory::truncate();
                DB::table('order_items')->truncate();
                DB::table('book_author')->truncate();
                Db::table('book_user')->truncate();

    }
}
