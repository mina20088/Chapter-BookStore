<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Genre::truncate();

       $Historical_fiction =  Genre::factory(1,[
           'name' => 'Historical fiction'
       ])->create();
       $Psychology = Genre::factory(1,[
            'name' => 'Psychology'
       ])->create();
       $Nonfiction = Genre::factory(1,[
            'name' => 'Nonfiction'
       ])->create();

       $Personal_Development = Genre::factory(1,[
            'name' => 'Personal Development'
       ])->create();
       $Science_Fiction = Genre::factory(1,[
            'name' => 'Science Fiction'
       ])->create();
       $Fantasy = Genre::factory(1,[
            'name' => 'Fantasy'
       ])->create();
       $Romance = Genre::factory(1,[
           'name' => 'Romance'
       ])->create();

       $Horror = Genre::factory(1,[
           'name' => 'Horror'
       ])->create();
       $Mystery = Genre::factory(1,[
           'name' => 'Mystery'
       ])->create();
       $Thriller = Genre::factory(1,[
           'name' => 'Thriller'
       ])->create();
     }
}
