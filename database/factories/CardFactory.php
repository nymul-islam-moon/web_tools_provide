<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'security_type' => $this->faker->sentence(),
            'card_number' => \rand(10000,100000000000000),
            'expiration' => $this->faker->date(),
            'cvv' => \rand(10,1000),
            'available_info' => $this->faker->sentence(),
            'all_info' => $this->faker->paragraph(),
            'price' => \rand(1000,3000),
            'status' => \rand(1,2),
        ];
    }
}
