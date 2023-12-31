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
         \App\Models\User::factory(5)->create();

        \App\Models\Atleta::factory(20)->create();
        \App\Models\Exercicio::factory(10)->create();
        \App\Models\Treino::factory(10)->create();


        $this->call([

            UserAdminSeeder::class,

        ]);
    }
}
