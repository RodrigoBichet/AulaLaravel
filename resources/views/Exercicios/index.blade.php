<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercicios</title>
</head>
<body>
<h1>Exercicios - Quantidade Total de Exercícios: {{$totalProds}}</h1>
@if ($listExercicios->count()>0)
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
        @foreach($listExercicios as $exercicio)
            <tr>
                <td><a href="/exercicio/{{$exercicio->id}}">{{$exercicio->id}}</a></td>
                <td>{{$exercicio->nome}}</td>
                <td>{{$exercicio->descricao}}</td>
                <td>{{$exercicio->categoria}}</td>
                <td>{{$exercicio->dificuldade}}</td>

                <td>
                    <a href="{{route('exercicio_edit', $exercicio->id)}}">Editar</a>
                    <a href="{{route('exercicio_delete', $exercicio->id)}}">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Exercicios não encontrados! </p>
@endif
<p><a href="{{route('exercicio_create')}}">Novo exercicio</a></p>
</body>
</html>
