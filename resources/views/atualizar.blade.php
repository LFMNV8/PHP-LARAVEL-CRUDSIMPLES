<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar-Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link rel="stylesheet" href="{{asset('css/atualizar.css')}}">
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

    <form action="{{route('atualizar-ver')}}" method="post">
        <div class="texto1">
        <h1>Atualizando dados do Jogo!</h1>
        </div>
        <label for="name">INFORME <spam>ID</span> DO JOGO QUE DESEJA MODIFICAR</label>
        <input type="text" name="id_jogo" id="">
        <label for="name">NOVO TITULO DO JOGO</label>
        <input type="text" name="titulo" id="">
        <label for="name">NOVO GÊNERO DO JOGO</label>
        <input type="text" name="genero" id="">
        <label for="name">NOVA PLATAFORMA DO JOGO</label>
        <input type="text" name="plataforma" id="">
        <label for="name">NOVA DATA DO LANCAMENTO</label>
        <input type="date" name="data_lancamento" id="">
        <label for="name">NOVA DENSENVOLVEDORA</label>
        <input type="text" name="desenvolvedora" id="">
        <button>Atualizar Dados</button>
    </form>
    
</body>