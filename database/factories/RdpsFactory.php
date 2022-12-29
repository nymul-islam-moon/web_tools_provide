<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rdps>
 */
class RdpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rdp'=>$this->faker->sentence(),
            'location'=>$this->faker->country(),
            'guranteed'=>$this->faker->word(),
            'hosting'=>$this->faker->sentence(),
            'source'=>$this->faker->word(),
            'access'=>$this->faker->word(),
            'os'=>$this->faker->word(),
            'price'=>\rand(10000,20000),
            'rams'=>$this->faker->word(),
            'status'=>\rand(1,2),
        ];
    }
}
