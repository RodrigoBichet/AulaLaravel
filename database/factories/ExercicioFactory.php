<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercicio>
 */
class ExercicioFactory extends Factory
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
            "descricao" => fake()->sentence(10),
            "categoria" => fake()->sentence(10),
            "dificuldade" => fake()->sentence(10)
        ];
    }
}
