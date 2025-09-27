<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QualityCheckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'user_id' => \App\Models\User::factory(),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'toxic' => $this->faker->boolean(10),
            'clean' => $this->faker->boolean(70),
            'safe' => $this->faker->boolean(90),
        ];
    }
}
