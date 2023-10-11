<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Treinos</title>
</head>
<body>
<h1>Treinos - Quantidade Total de Treinos: {{$totalProds}}</h1>
@if ($listTreinos->count()>0)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>



        </tr>
        </thead>
        <tbody>
        @foreach($listTreinos as $treino)
            <tr>
                <td><a href="/treino/{{$treino->id}}">{{$treino->id}}</a></td>
                <td>{{$treino->nome}}</td>
                <td>{{$treino->descricao}}</td>


                <td>
                    <a href="{{route('treino_edit', $treino->id)}}">Editar</a>
                    <a href="{{route('treino_delete', $treino->id)}}">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Treinos não encontrados! </p>
@endif
<p><a href="{{route('treino_create')}}">Novo treino</a></p>
</body>
</html>
