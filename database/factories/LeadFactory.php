<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'download_link' => $this->faker->sentence(),
            'number' => $this->faker->word(),
            'type' => $this->faker->sentence(),
            'provider' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'additional_info' => $this->faker->paragraph(),
            'proof' => $this->faker->sentence(),
            'country' => $this->faker->country(),
            'price' => \rand(1000,2000),
            'status' => \rand(1,2),
        ];
    }
}
