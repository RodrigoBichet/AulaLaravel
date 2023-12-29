<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;
    protected $fillable =['nome', 'descricao', 'exercicio_treino', 'atleta_treino'];

    public function atleta(){
        return $this->belongsTo(Atleta::class);
    }
    public function exercicios(){
        return $this->belongsTo(Exercicio::class);
    }

//    public function exercicios()
//    {
//        return $this->belongsToMany(Exercicio::class, 'exercicio_treino');
//    }

}

