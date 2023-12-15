<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atleta>
 */
class AtletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => fake()->name(),
            "email" => fake()->email(),
            "telefone" => fake()->cellphone(),
            "data_de_nascimento" => fake()->dateTime(),
            "cpf" => fake()->cpf(false),
            "altura" => fake()->randomFloat(2,1,2.20),
             "peso" => fake()->randomFloat(2,30,200)
        ];
    }
}

