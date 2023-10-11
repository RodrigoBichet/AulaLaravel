<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treino>
 */
class TreinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => fake()->text(30),
            "descricao" => fake()->text(30),
            "atleta_id" => fake()->numberBetween(1,20),
            "exercicio_id" => fake()->numberBetween(1,10),
        ];
    }
}
