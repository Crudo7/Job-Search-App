<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Offer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        //Offer::factory(5)->create();
        
        Offer::factory(10)->create([
            'offer' => 'Dominik Pizza',
            'workstation' => 'Repartidor de comida rápida, 8 horas',
            'state' => 'Abierto',

        ]);
    }
}
