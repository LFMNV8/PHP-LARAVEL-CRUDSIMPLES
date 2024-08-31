<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/remover.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
<div class="container">
    <a href="{{route('carregamento')}}">Ver Jogos</a>
    <a href="{{route('carregamento2')}}">Adicionar</a>
    <img src ="{{asset('images/controle.png')}}">
    <a href="{{route('carregamento3')}}">Atualizar</a>
    <a href="{{route('carregamento4')}}">Remover</a>
</div>
</header>
<body>

<form action="{{route('deletar')}}" method="post">

<label for="">Informe o Nome do Jogo Que deseja excluir!</label>
<input type="text" name="titulo" id="">

<button id="remover">Remover</button>


</form>

</body>
</html>