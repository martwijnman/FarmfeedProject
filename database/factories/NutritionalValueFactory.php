<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NutritionalValue;
use App\Models\Product;

class NutritionalValueFactory extends Factory
{
    protected $model = NutritionalValue::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'animal_type' => $this->faker->randomElement(['Dog', 'Cat', 'Rabbit', 'Bird']),
            'energy_kcal' => $this->faker->randomFloat(2, 50, 500),
            'protein_g' => $this->faker->randomFloat(2, 0, 50),
            'fat_g' => $this->faker->randomFloat(2, 0, 30),
        ];
    }
}
