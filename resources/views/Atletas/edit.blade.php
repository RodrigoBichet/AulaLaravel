<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Insert new Atleta</h1>
<form action="{{route('atleta_update',$atleta->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$atleta->nome}}"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="{{$atleta->email}}"/></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input type="text" name="telefone" value="{{$atleta->telefone}}"/></td>
        </tr>
        <tr>
            <td>Data de Nascimento:</td>
            <td><input type="date" name="data_de_nascimento" value="{{$atleta->data_de_nascimento}}"/></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type="text" name="cpf" value="{{$atleta->cpf}}"/></td>
        </tr>
        <tr>
            <td>Altura:</td>
            <td><input type="text" name="altura" value="{{$atleta->altura}}"/></td>
        </tr>
        <tr>
            <td>Peso:</td>
            <td><input type="text" name="peso" value="{{$atleta->peso}}"/></td>
        </tr>

        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/atletas"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
