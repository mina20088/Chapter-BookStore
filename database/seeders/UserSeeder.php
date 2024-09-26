<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->has(Address::factory()->count(1))->create();
    }
}
