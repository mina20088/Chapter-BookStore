<?php

namespace Database\Seeders;

use App\Enums\AuthorsEnum;
use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Schema::disableForeignKeyConstraints();
        Author::truncate();
        Author::factory()->createMany([
           [
               'first_name' => "Olivia",
               'middle_name' => null,
               'last_name' => "Wilson",
               'image' => AuthorsEnum::Alice
           ],
            [
                'first_name' => "Aron",
                'middle_name' => null,
                'last_name' => "Loeb",
                'image' => AuthorsEnum::Aron
            ],
            [
                'first_name' => "Matt",
                'middle_name' => null,
                'last_name' => "Zhang",
                'image' => AuthorsEnum::Matt
            ],
            [
                'first_name' => "Chiaki",
                'middle_name' => null,
                'last_name' => "Zhang",
                'image' => AuthorsEnum::Chiki
            ],
            [
                'first_name' => "Lars",
                'middle_name' => null,
                'last_name' => "Peeters",
                'image' => AuthorsEnum::Lars
            ],
        ]);
    }
}
