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
<form action="/atleta" method="POST">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input name="email" type="email"/></td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td><input type="text" name="telefone"/></td>
        </tr>
        <tr>
            <td>Data de Nascimento:</td>
            <td><input type="date" name="data_de_nascimento"/></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type="text" name="cpf"/></td>
        </tr>
        <tr>
            <td>Altura:</td>
            <td><input type="text" name="altura"/></td>
        </tr>
        <tr>
            <td>Peso:</td>
            <td><input type="text" name="peso"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" value="Criar"/></td>
        </tr>
        <tr align="center">
            <td colspan="2"><a href="/atletas" style="display: inline">&#9664;&nbsp;Voltar</a></td>
        </tr>
    </table>
</form>
</body>

</html>
