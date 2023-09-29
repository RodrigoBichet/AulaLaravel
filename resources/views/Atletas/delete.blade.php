<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
@if ($atleta)
    <h1>{{ $atleta->nome }}</h1>
    <ul>
        <li>Email: {{ $atleta->email}}</li>
        <li>Telefone: {{ $atleta->telefone }}</li>
        <li>Data de Nascimento: {{ $atleta->data_de_nascimento}}</li>
        <li>CPF: {{ $atleta->cpf }}</li>
        <li>Altura: {{ $atleta->altura }}</li>
        <li>Peso: {{ $atleta->peso }}</li>
    </ul>
    <table>
        <tr>
            <td>
                <form action="{{ route('atleta_remove',$atleta->id) }}" method='post'>
                    @csrf
                    <input type="submit" name='confirmar' value="Remover" />
                </form>
            </td>
            <td>
                <a href="/atletas"><button>Cancelar</button></a>
            </td>
        </tr>
    </table>
@else
    <p>Atletas não encontrados! </p>
@endif
<a href="/Atletas">&#9664;Voltar</a>
</body>
</html>
