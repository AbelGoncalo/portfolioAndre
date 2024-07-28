<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Provincia::factory(10)->create();
        \App\Models\Municipio::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Agente::factory(10)->create();
        \App\Models\Galeria::factory(10)->create();
        \App\Models\Servico::factory(10)->create();






        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
