<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;
    protected $table = 'exercicios';
    protected $fillable =['nome', 'descricao', 'categoria', 'dificuldade'];

    public function treinos(){
        return $this->hasMany(Treino::class);
    }

//    public function treino()
//    {
//        return $this->belongsTo(Treino::class);
//    }

}
