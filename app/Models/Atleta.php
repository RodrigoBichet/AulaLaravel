<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    use HasFactory;
    protected $fillable =['nome', 'email', 'telefone', 'data_de_nascimento', 'cpf', 'altura', 'peso'];

    public function treinos(){
        return $this->hasMany(Treino::class);
    }
}
