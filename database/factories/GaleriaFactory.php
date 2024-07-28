<?php

namespace Database\Factories;

use App\Models\Agente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeria>
 */
class GaleriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agente_id'=>Agente::all()->random()->id,
            'descricao'=>fake()->name(),
        ];
    }
}
