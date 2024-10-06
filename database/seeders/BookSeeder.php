<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use JetBrains\PhpStorm\NoReturn;
use Schema;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    #[NoReturn]
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Book::truncate();
        $books = Book::factory(6)->createMany([
            [
                'genre_id' => 8,
                'publisher_id' => 3,
                'title' => "Silence",
                'cover_image' => "storage/images/books-cover/silence.png",
                'description' => "Silence is a novel by <NAME> that tells the story of a young boy who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(2, "days")->subMinute(5),
                "updated_at" => Carbon::parse(Carbon::now())->sub(2, "days")->subMinute(5)
            ],
            [
                'genre_id' => 2,
                'publisher_id' => 10,
                'title' => "The Code Of Success",
                'cover_image' => "storage/images/books-cover/_Black and Red Photocentric Ebook Cover.png",
                'description' => "The Code of Success is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(2, "days")->subMinute(10),
                "updated_at" => Carbon::parse(Carbon::now())->sub(2, "days")->subMinute(10)
            ],
            [
                'genre_id' => 6,
                'publisher_id' => 8,
                'title' => "Journey To The Strange Village",
                'cover_image' => "storage/images/books-cover/Forest background aesthetic novel book cover.png",
                'description' => "Journey to the Strange Village is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(3, "days")->subMinute(3),
                "updated_at" => Carbon::parse(Carbon::now())->sub(3, "days")->subMinute(3)
            ],
            [
                'genre_id' => 2,
                'publisher_id' => 2,
                'title' => "The Lost",
                'cover_image' => "storage/images/books-cover/Red and Yellow Minimalist Modern Creative Lost Man Without Head Book Cover.png",
                'description' => "The Lost is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(2, "days"),
                "updated_at" => Carbon::parse(Carbon::now())->sub(2, "days")
            ],
            [
                'genre_id' => 8,
                'publisher_id' => 3,
                'title' => "Ranch",
                'cover_image' => "storage/images/books-cover/Black Horror Novel Book Cover.jpg",
                'description' => "Ranch is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(1, "days")->subMinute(6),
                "updated_at" => Carbon::parse(Carbon::now())->sub(1, "days")->subMinute(6),
            ],
            [
                'genre_id' => 2,
                'publisher_id' => 3,
                'title' => "Mind Set",
                'cover_image' => "storage/images/books-cover/White Minimalist Mindset Book Cover.png",
                'description' => "Mind Set is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father.",
                "created_at" => Carbon::parse(Carbon::now())->sub(4, "days")->subMinute(2),
                "updated_at" => Carbon::parse(Carbon::now())->sub(4, "days")->subMinute(2)
            ],
        ]);


        $books->where("id", 1)->first()->authors()->attach(1);
        $books->where("id", 2)->first()->authors()->attach(2);
        $books->where("id", 3)->first()->authors()->attach(4);
        $books->where("id", 4)->first()->authors()->attach(3);
        $books->where("id", 5)->first()->authors()->attach(1);
        $books->where("id", 6)->first()->authors()->attach(5);
    }
}
