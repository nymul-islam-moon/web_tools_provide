<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SshWhms>
 */
class SshWhmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'ssh'=>$this->faker->sentence(),
                'host_info'=>$this->faker->sentence(),
                'has_whm'=>$this->faker->word(),
                'hosting'=>$this->faker->sentence(),
                'country'=>$this->faker->country(),
                'rams'=>$this->faker->word(),
                'price'=>\rand(10000,20000),
                'status'=>\rand(1,2),
        ];
    }
}
