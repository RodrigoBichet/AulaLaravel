<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<h1>Insert new Exercicio</h1>
<form action="{{route('exercicio_update',$exercicio->id)}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="{{$exercicio->nome}}"/></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><input type="text" name="descricao" value="{{$exercicio->descricao}}"/></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td><input type="text" name="categoria" value="{{$exercicio->categoria}}"/></td>
        </tr>
        <tr>
            <td>Dificuldade:</td>
            <td><input type="text" name="dificuldade" value="{{$exercicio->dificuldade}}"/></td>
        </tr>


        <tr align="center">
            <td colspan="2">
                <input type="submit" value="Salvar"/>
                <a href="/exercicios"><button form=cancel >Cancelar</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
