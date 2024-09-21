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
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use JetBrains\PhpStorm\NoReturn;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    #[NoReturn]
    public function run(): void
    {

        DB::listen(function ($query) {
            echo $query->sql . "\n";
        });




        $user = User::factory()->create();
  /*      $Order = Order::create([
            'user_id' => $user->id,
            'order_status' => OrderStatus::Pending,

        ])->books()->attach(Book::factory()->count(5)->create()->pluck('id'),['quantity' => 5,'price' => 100]);*/

        $order = Order::factory()->create()->books()->attach(Book::factory()->count(5)->create()->pluck('id'),['quantity' => 5,'price' => 100]);





    }
}
