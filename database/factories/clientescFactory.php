<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clientesc>
 */

 class clientescFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'email'=> fake()->name(),
            'password'=>static::$password ??= Hash::make('holamundo'),
            'token_rembered'=>random_int(1,10),
            'telefono' => random_int(1,100),
            'direccion' => $this->faker->sentence
            
            
        ];
    }
}
