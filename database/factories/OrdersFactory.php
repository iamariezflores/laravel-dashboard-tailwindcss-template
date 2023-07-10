<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'total' => $this->faker->randomDigitNotNull,
            'status' => $this->faker->randomElement(['On-Hold', 'Processing', 'Completed']),
            'method' => $this->faker->randomElement(['Paypal', 'Visa', 'Mastercard']),
        ];
    }
}
