<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\QualityCheckValue;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'order_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Safe', 'Warning', 'Hazardous']),
            'expected_delivery_date' => $this->faker->date(),
            'new_delivery_date' => $this->faker->date(),
            'total_amount' => $this->faker->randomFloat(2, 5, 500),
        ];
    }
}
