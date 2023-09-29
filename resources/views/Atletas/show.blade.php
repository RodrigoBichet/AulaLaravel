<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Atletas</title>
</head>
<body>
<h1>Atletas</h1>
@if ($atleta)
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
            <tr>
                <td>{{$atleta->id}}</td>
                <td>{{$atleta->nome}}</td>
                <td>{{$atleta->email}}</td>
                <td>{{$atleta->telefone}}</td>
                <td>{{$atleta->data_de_nascimento}}</td>
                <td>{{$atleta->cpf}}</td>
                <td>{{$atleta->altura}}</td>
                <td>{{$atleta->peso}}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>Atletas não encontrado! </p>
@endif

<a href="/atletas">Voltar</a>
</body>
</html>
