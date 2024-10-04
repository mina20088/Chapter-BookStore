<?php

namespace Database\Seeders;


use App\Enums\OrderStatus;
use App\Models\Book;
use App\Models\Order;
use App\Models\Publisher;
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


        \Schema::disableForeignKeyConstraints();
        DB::table('book_author')->truncate();

        $this->call([
            AuthorsSeeder::class,
            GenreSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
        ]);
    }
}
