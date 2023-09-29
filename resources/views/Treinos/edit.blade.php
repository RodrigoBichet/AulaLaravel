<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Insert new Treino</h1>
<form action="{{route('treino_update',$treino->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$treino->nome}}"/></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><input type="text" name="descricao" value="{{$treino->descricao}}"/></td>
        </tr>
        <tr>
            <td>Exercício do treino:</td>
            <td><input type="text" name="exercicio_treino" value="{{$treino->exercicio_treino}}"/></td>
        </tr>


        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/treinos"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
