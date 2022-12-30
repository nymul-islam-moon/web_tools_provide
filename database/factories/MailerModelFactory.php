<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MailerModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mailer' => $this->faker->sentence(),
            'country' => $this->faker->country(),
            'hosting' => $this->faker->word(),
            'price' => \rand(1000,3000),
            'status' => \rand(1,2),
            'added' => $this->faker->word(),
        ];
    }
}
