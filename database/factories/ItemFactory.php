<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true), // contoh: 'aliquid dolor'
            'price' => $this->faker->numberBetween(5000, 50000),
            'stock' => $this->faker->numberBetween(10, 100),
        ];
    }
}
