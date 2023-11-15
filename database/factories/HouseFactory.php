<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "status" => "available",
            "title" => fake()->address(),
            "address" => fake()->address(),
            "description" => fake()->sentence(),
            "rent_amount" => fake()->numberBetween(1000, 10000),
            "bedrooms" => fake()->numberBetween(1,10),
            "bathrooms" => fake()->numberBetween(1,10),
            "size_sqm" => fake()->numberBetween(800,10000),
            "user_id" => fake()->numberBetween(1,10),
        ];
    }
}
