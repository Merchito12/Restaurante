<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedidos>
 */
class pedidosFactory extends Factory
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
            'id_cliente' => random_int(1,100),
            'numero' => random_int(1,100),
            'email' => random_int(1,100),
            'productos' => fake()->name(),
            'direccion' => fake()->name(),
           
            'estado' => fake()->name()
          
        ];
    }
}
