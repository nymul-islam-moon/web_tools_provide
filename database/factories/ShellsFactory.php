<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shells>
 */
class ShellsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shell'=>$this->faker->sentence(),
            'country'=>$this->faker->country(),
            'hosting'=>$this->faker->country(),
            'seo_rank'=>$this->faker->word(),
            'host_info'=>$this->faker->sentence(),
            'price'=>\rand(10000,20000),
            'status'=>\rand(1,2),
        ];
    }
}
