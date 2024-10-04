<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use JetBrains\PhpStorm\NoReturn;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    #[NoReturn]
    public function run(): void
    {
        \Schema::disableForeignKeyConstraints();
        Book::truncate();
       $books =  Book::factory(6)->createMany([
            ['genre_id' => 8 , 'publisher_id' => 3 , 'title' => "Silence" , 'cover_image' => "storage/images/books/silence.jpg" , 'description' => "Silence is a novel by <NAME> that tells the story of a young boy who is raised by his mother's abusive father."],
            ['genre_id' => 2 , 'publisher_id' => 10 , 'title' => "The Code Of Success" , 'cover_image' => "storage/images/books/_Black and Red Photocentric Ebook Cover.png" , 'description' => "The Code of Success is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father."],
            ['genre_id' => 6 , 'publisher_id' => 8 , 'title' => "Journey To The Strange Village" , 'cover_image' => "storage/images/books/Forest background aesthetic novel book cover.png" , 'description' => "Journey to the Strange Village is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father."],
            ['genre_id' => 2 , 'publisher_id' => 2 , 'title' => "The Lost" , 'cover_image' => "storage/images/books/Red and Yellow Minimalist Modern Creative Lost Man Without Head Book Cover.png" , 'description' => "The Lost is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father."],
            ['genre_id' => 8 , 'publisher_id' => 3 , 'title' => "Ranch" , 'cover_image' => "storage/images/books/Black Horror Novel Book Cover.png" , 'description' => "Ranch is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father."],
            ['genre_id' => 2 , 'publisher_id' => 3 , 'title' => "Mind Set" , 'cover_image' => "storage/images/books/White Minimalist Mindset Book Cover.png" , 'description' => "Mind Set is a book by <NAME> that tells the story of a young man who is raised by his mother's abusive father."],
        ]);


       $books->where("id" , 1)->first()->authors()->attach(1);
       $books->where("id" , 2)->first()->authors()->attach(2);
       $books->where("id" , 3)->first()->authors()->attach(4);
       $books->where("id" , 4)->first()->authors()->attach(3);
       $books->where("id" , 5)->first()->authors()->attach(1);
       $books->where("id" , 6)->first()->authors()->attach(5);
    }
}
