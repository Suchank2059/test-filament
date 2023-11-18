<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{

    public function definition(): array
    {
        return [
            'country_code' => $this->faker->countryCode(),
            'name' => $this->faker->country(),
        ];
    }
}
