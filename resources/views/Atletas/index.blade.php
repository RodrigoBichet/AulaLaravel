<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Atletas</title>
</head>
<body>
<h1>Atletas - Quantidade Total de Atletas: {{$totalProds}}</h1>
@if ($listAtletas->count()>0)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Altura</th>
            <th>Peso</th>

        </tr>
        </thead>
        <tbody>
        @foreach($listAtletas as $atleta)
            <tr>
                <td><a href="/atleta/{{$atleta->id}}">{{$atleta->id}}</a></td>
                <td>{{$atleta->nome}}</td>
                <td>{{$atleta->email}}</td>
                <td>{{$atleta->telefone}}</td>
                <td>{{$atleta->data_de_nascimento}}</td>
                <td>{{$atleta->cpf}}</td>
                <td>{{$atleta->altura}}</td>
                <td>{{$atleta->peso}}</td>
                <td>
                    <a href="{{route('atleta_edit', $atleta->id)}}">Editar</a>
                    <a href="{{route('atleta_delete', $atleta->id)}}">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Atletas não encontrados! </p>
@endif
<p><a href="{{route('atleta_create')}}">Novo atleta</a></p>
</body>
</html>
