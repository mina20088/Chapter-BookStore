<?php

namespace Database\Seeders;

use App\Enums\OrderStatus;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Order;
use App\Models\OrderItems;
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


        $this->callOnce([
            UserSeeder::class,
            BookSeeder::class,
        ]);

        $user = User::find(1);

        $book1 = Book::find(1);



    }
}
