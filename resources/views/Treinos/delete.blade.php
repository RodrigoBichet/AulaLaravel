<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Treinos</title>
</head>
<body>
@if ($treino)
    <h1>{{ $treino->nome }}</h1>
    <ul>
        <li>Descrição: {{ $treino->descricao}}</li>
        <li>Exercício do treino: {{ $treino->exercicio_treino}}</li>
        <li>Atleta do treino: {{ $treino->atleta_treino}}</li>

    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('treino_remove',$treino->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/treinos"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Treinos não encontrados! </p>
@endif
<a href="/Treinos">&#9664;Voltar</a>
</body>
</html>
