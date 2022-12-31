<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SMTP>
 */
class SMTPFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'host' => $this->faker->sentence(),
            'port' => \rand(10,550),
            'username' => $this->faker->sentence(),
            'password' => $this->faker->password(),
            'web_mail' => $this->faker->sentence(),
            'country' => $this->faker->country(),
            'hosting' => $this->faker->word(),
            'price' => \rand(1000,5500),
            'status' => \rand(1,2),
            'added' => $this->faker->word(),
        ];
    }
}
