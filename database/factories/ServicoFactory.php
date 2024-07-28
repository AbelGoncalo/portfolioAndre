<?php

namespace Database\Factories;

use App\Models\Agente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servico>
 */
class ServicoFactory extends Factory
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
            'levantar'=>fake()->boolean(),
            'reservar'=>fake()->boolean(),
            'depositar'=>fake()->boolean(),
        ];
    }
}
