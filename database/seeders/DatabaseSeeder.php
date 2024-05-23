<?php

namespace Database\Seeders;
use App\Models\Clientesc;
use App\Models\pedidos;
use App\Models\productos;
use Database\Factories\productosFactory;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        pedidos::factory(10)->create();

       
    }
}

