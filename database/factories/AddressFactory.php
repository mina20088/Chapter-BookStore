<?php

namespace Database\Factories;

use App\Enums\AddressTypeEnum;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'user_id' => UserFactory::class,
            'type' => AddressTypeEnum::class,
            'house_number/building_number' => $this->faker->buildingNumber,
            'street_name' => $this->faker->streetName,
            'unit/apartment_number' => $this->faker->buildingNumber,
            'city' => $this->faker->city(),
            'state/province/region' =>$this->faker->state(),
            'zip-code' => $this->faker->postcode(),
        ];
    }
}
