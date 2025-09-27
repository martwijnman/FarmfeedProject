<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 5, 500),
            'category' => $this->faker->randomElement(['Electronics', 'Toys', 'Food', 'Clothing', 'Tools']),
            'safety_status' => $this->faker->randomElement(['Safe', 'Warning', 'Hazardous']),
            'stock_quantity' => $this->faker->numberBetween(0, 1000),
            'stock_treshold' => $this->faker->numberBetween(1, 50),
        ];
    }
}
