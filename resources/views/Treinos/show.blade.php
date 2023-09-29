<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Treinos</title>
</head>
<body>
<h1>Treinos</h1>
@if ($treino)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Exercício do treino</th>
            <th>Atleta do treino</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$treino->id}}</td>
                <td>{{$treino->nome}}</td>
                <td>{{$treino->descricao}}</td>
                <td>{{$treino->exercicio_treino}}</td>
                <td>{{$treino->atleta_treino}}</td>

            </tr>
        </tbody>
    </table>
@else
    <p>Treinos não encontrado! </p>
@endif

<a href="/treinos">Voltar</a>
</body>
</html>
