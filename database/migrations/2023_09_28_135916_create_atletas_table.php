<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->text('email');
            $table->text('telefone');
            $table->date('data_de_nascimento');
            $table->integer('cpf');
            $table->text('altura');
            $table->text('peso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletas');
    }
};
