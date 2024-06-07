<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class KontakFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->sentence,
        ];
    }
}
