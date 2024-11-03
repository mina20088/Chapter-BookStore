<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;
use Schema;

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


        Schema::disableForeignKeyConstraints();
        DB::table('book_author')->truncate();

        $this->call([
            AuthorsSeeder::class,
            GenreSeeder::class,
            PublisherSeeder::class,
/*            BookSeeder::class,
            Inventory::class*/
        ]);
    }
}
