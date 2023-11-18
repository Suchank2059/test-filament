<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->date(),
            'address' => fake()->address(),
            'zipcode' => fake()->countryCode(),
            'date_hired' => fake()->date(),
        ];
    }
}
