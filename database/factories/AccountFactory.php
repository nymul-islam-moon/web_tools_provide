<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
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
            'download_link' => $this->faker->sentence(),
            'website' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(5),
            'type' => $this->faker->word(),
            'country' => $this->faker->country(),
            'price' => \rand(10000, 20000),
            'status' => \rand(1,2),
        ];
    }
}
