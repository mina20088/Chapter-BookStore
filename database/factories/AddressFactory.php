<?php

namespace Database\Factories;

use App\Enums\AddressTypeEnum;
use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'type' => $this->faker->randomElement(AddressTypeEnum::class),
            'house_number/building_number' => $this->faker->buildingNumber,
            'street-name' => $this->faker->streetName,
            'unit/apartment-number' => $this->faker->buildingNumber,
            'city' => $this->faker->city(),
            'state/province/region' =>$this->faker->state(),
            'zip-code' => $this->faker->postcode(),
        ];
    }
}
