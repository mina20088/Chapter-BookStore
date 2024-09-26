<?php

namespace Database\Seeders;


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
        $user->orders()->create([

        ]);

    }
}
