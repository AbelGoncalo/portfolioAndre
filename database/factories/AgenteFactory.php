<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agencia>
 */
class AgenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
        'user_id'=>User::all()->random()->id,
        'descricao'=>fake()->name(),
        'provincia'=>fake()->name(),
        'municipio'=>fake()->name(),
        'bairro'=>fake()->name(),
        'nif'=>fake()->phoneNumber,
        'numeroAgente'=>fake()->phoneNumber,
        ];
    }
}
