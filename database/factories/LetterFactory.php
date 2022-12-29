<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Letter>
 */
class LetterFactory extends Factory
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
            'type' => $this->faker->word(),
            'download_link' => $this->faker->sentence(),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(5),
            'price' => \rand(10000, 20000),
            'status' => \rand(1, 2),
        ];
    }
}
