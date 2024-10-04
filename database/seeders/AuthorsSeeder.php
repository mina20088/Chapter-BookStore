<?php

namespace Database\Seeders;

use App\Enums\AuthorsEnum;
use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

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
                'slug' =>  str::slug('Olivia Wilson'),
               'image' => AuthorsEnum::Alice
           ],
            [
                'first_name' => "Aron",
                'middle_name' => null,
                'slug' =>  str::slug('Aron Loeb'),
                'last_name' => "Loeb",
                'image' => AuthorsEnum::Aron
            ],
            [
                'first_name' => "Matt",
                'middle_name' => null,
                'last_name' => "Zhang",
                'slug' =>  str::slug('Matt Zhang'),
                'image' => AuthorsEnum::Matt
            ],
            [
                'first_name' => "Chiaki",
                'middle_name' => null,
                'last_name' => "Zhang",
                'slug' =>  str::slug('Chiaki Zhang'),
                'image' => AuthorsEnum::Chiki
            ],
            [
                'first_name' => "Lars",
                'middle_name' => null,
                'last_name' => "Peeters",
                'slug' =>  str::slug('Lars Peeters'),
                'image' => AuthorsEnum::Lars
            ],
        ]);
    }
}
