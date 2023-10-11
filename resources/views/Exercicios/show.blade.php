<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercicios</title>
</head>
<body>
<h1>Exercicios</h1>
@if ($exercicio)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Dificuldade</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$exercicio->id}}</td>
                <td>{{$exercicio->nome}}</td>
                <td>{{$exercicio->descricao}}</td>
                <td>{{$exercicio->categoria}}</td>
                <td>{{$exercicio->dificuldade}}</td>

            </tr>
        </tbody>
    </table>
@else
    <p>Exercicio não encontrado! </p>
@endif

<a href="/exercicios">Voltar</a>
</body>
</html>
