<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'categoria' => $this->faker->sentence,
            'informacion' => $this->faker->sentence,
            'imagen' => '\images\imagen1.jpeg',
            'precio' => random_int(1,10000)
          
        ];
    }
}
