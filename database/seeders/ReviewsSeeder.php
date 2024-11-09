<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Reviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Reviews::truncate();

        Book::where("id", 1)->first()->reviewed()->attach(1,[
            'title' => "good",
            'ratings' => 4
        ]);

        Book::where("id", 1)->first()->reviewed()->attach(1,[
            'title' => "bad",
            'ratings' => 1
        ]);
        Book::where("id", 2)->first()->reviewed()->attach(2,[
            'title' => "medium",
            'ratings' => 3
        ]);
        Book::where("id", 3)->first()->reviewed()->attach(1,[
            'title' => "good",
            'ratings' => 3
        ]);

        Book::where("id", 3)->first()->reviewed()->attach(2,[
            'title' => "prefect",
            'ratings' => 5
        ]);
    }
}
