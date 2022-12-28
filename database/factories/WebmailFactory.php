<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Webmail>
 */
class WebmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->sentence(),
            'username' => $this->faker->sentence(),
            'password' => $this->faker->password(),
            'price' => \rand(1000,3000),
            'status' => \rand(1,2),
        ];
    }
}
