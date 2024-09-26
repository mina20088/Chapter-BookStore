<?php

namespace Database\Seeders;

use App\Enums\ActiveEnum;
use App\Enums\Gender;
use App\Enums\OrderStatus;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Shipment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
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

        $this->call(
            UserSeeder::class,
        );



    }
}
