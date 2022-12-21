<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lufix>
 */
class LufixFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => \rand(1, 100),
            'title' => $this->faker->sentence(),
            'status' => \rand(1,2),
            'description' => $this->faker->paragraph(10),
            'price' => \rand(10000, 20000),
            'duration' => \rand(10, 20),
        ];
    }
}
