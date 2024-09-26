<?php

namespace Database\Seeders;


use App\Enums\OrderStatus;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $this->callOnce([
            UserSeeder::class
        ]);
        $this->call([
           BookSeeder::class
        ]);

        $user = User::find(1);
        $books = Book::where("id", 1)->orWhere("id", 2)->get();
        $books_id = $books->pluck('id');
        $order = $user->orders()->create([
            'order_status' => OrderStatus::Cancelled
        ]);
        $order->books()->attach([
            $books_id[0] => ['price' => 100, 'quantity' => 1],
            $books_id[1] => ['price' => 940, 'quantity' => 2],
        ]);

    }
}
