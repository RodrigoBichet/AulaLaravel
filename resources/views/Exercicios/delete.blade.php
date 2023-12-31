<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercicios</title>
</head>
<body>
@if ($exercicio)
    <h1>{{ $exercicio->nome }}</h1>
    <ul>
        <li>Descrição: {{ $exercicio->descricao}}</li>
        <li>Categoria: {{ $exercicio->categoria}}</li>
        <li>Dificuldade: {{ $exercicio->dificuldade}}</li>
    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('exercicio_remove',$exercicio->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/exercicios"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Exercicios não encontrados! </p>
@endif
<a href="/Exercicios">&#9664;Voltar</a>
</body>
</html>
