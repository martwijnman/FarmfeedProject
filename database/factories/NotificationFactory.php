<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Koppelt aan een nieuwe User
            'type' => $this->faker->randomElement(['info', 'warning', 'success', 'error']),
            'message' => $this->faker->sentence(),
            'date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'read' => $this->faker->boolean(30), 
        ];
    }
}
