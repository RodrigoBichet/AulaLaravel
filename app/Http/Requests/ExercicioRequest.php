<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExercicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'nome' => 'required | max:20',
            'descricao' => 'required | max:20',
            'categoria' => 'required | max:20',
            'dificuldade' => 'required | max:20',
        ];
    }

    public function messages()
    {
        return[
            'nome.required' => 'O nome do Exercicio é obrigatório!',
            'nome.max' => 'O nome não pode passar de vinte caracteres!',
            'descricao.required' => 'A descrição do Exercicio é obrigatória!',
            'descricao.max' => 'A descrição não pode passar de vinte caracteres!',
            'categoria.required' => 'A categoria do Exercicio é obrigatória!',
            'categoria.max' => 'A categoria não pode passar de vinte caracteres!',
            'dificuldade.required' => 'A dificuldade do Exercicio é obrigatória!',
            'dificuldade.max' => 'A dificuldade não pode passar de vinte caracteres!'
        ];
    }
}
