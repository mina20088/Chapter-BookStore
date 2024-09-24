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




        $user = User::factory()->create();
  /*      $Order = Order::create([
            'user_id' => $user->id,
            'order_status' => OrderStatus::Pending,

        ])->books()->attach(Book::factory()->count(5)->create()->pluck('id'),['quantity' => 5,'price' => 100]);*/

        //$order = Order::factory()->create()->books()->attach(Book::factory()->count(5)->create()->pluck('id'),['quantity' => 5,'price' => 100]);

        $user = User::create([
            'first_name' => "mina",
            'last_name' => "shaker",
            'email' => "mina@shaker.com",
            'gender' => Gender::Male,
            'DOB' => "1986-12-17",
            'phone_number' => "0100777794",
            'address_1' => "23 abn matrouh-shoupra-cairo",
            'active' => ActiveEnum::Active,
            'password' => "22058149"
        ]);

        $order = $user->orders()->create([
            'order_date' => now(),
            'user_id' => $user->id,
            'order_status' => OrderStatus::Pending,
        ]);

        $userOrder = Order::find($order->id);

        $userOrder->books()->attach(Book::factory(2)->create()->pluck('id'),['quantity' => 2, 'price' => 200]);

        $userOrder->shipment()->create([
            'order_id' => $order->id,
            'delivery_date' => Carbon::parse($userOrder->created_at)->addDays(5),
            'estimated_delivery_date' => Carbon::parse($userOrder->created_at)->addDays(5),
            'status' => OrderStatus::OnHold,
            'cost' => 50.00

        ]);
    }
}
