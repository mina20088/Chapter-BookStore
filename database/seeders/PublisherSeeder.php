<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Publisher::truncate();
        Publisher::factory(11)->createMany([
            ['name' => "Penguin"],
            ['name' => "HarperCollins"],
            ['name' => "Simon & Schuster"],
            ['name' => "Hachette"],
            ['name' => "Pearson"],
            ['name' => "Wiley"],
            ["name" => "McGraw-Hill Education"],
            ["name" => "Oxford University Press"],
            ["name" => "Bloomsbury"],
            ['name' => "Scholastic Corporation"],
            ['name' => "Macmillan"],
        ]);
    }
}
