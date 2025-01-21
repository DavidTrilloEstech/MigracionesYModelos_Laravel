<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' => fake()->text(),
            'quantity' => fake()->numberBetween(1,10000),
            'status' =>fake()->numberBetween(0,2),
            'seller_id' => User::factory(),

            'created_at'=> now(),
        ];
    }
}
