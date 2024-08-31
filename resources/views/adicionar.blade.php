<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar-Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/adicionar.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
<div class="container">
    <a href="{{route('carregamento')}}">Ver Jogos</a>
    <a href="{{route('carregamento2')}}">Adicionar</a>
    <img src ="{{asset('images/controle.png')}}">
    <a href="{{route('carregamento3')}}">Atualizar</a>
    <a href="{{route('carregamento4')}}">Remover</a>
    
</header>
</div>
<body>
    
<form action="{{route('adicionar-jogos')}}" method="post">
    
    <label for="name">TITULO DO JOGO</label>
    <input type="text" name="titulo" id="">
    <label for="name">GÊNERO DO JOGO</label>
    <input type="text" name="genero" id="">
    <label for="name">PLATAFORMA DO JOGO</label>
    <input type="text" name="plataforma" id="">
    <label for="name">DATA DO LANCAMENTO</label>
    <input type="date" name="data_lancamento" id="">
    <label for="name">DENSENVOLVEDORA</label>
    <input type="text" name="desenvolvedora" id="">
    <button id= 'enviar'>Enviar</button>
    

</form>




</body>
</html>