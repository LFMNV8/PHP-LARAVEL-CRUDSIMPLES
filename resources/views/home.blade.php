<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{asset('js/carrosel.js') }}"></script>
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

<main class="conteudo__geral">
        <div class="cartao cartao0">
            <div class="elemento__interno-borda">
                <h2>Fifa</h2>
                <div class="caixa__icones">
                    <i class="fa fa-github" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="cartao cartao1">
            <div class="elemento__interno-borda">
                <h2>Call of Duty</h2>
                <div class="caixa__icones">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="cartao cartao2">
            <div class="elemento__interno-borda">
                <h2>CS:GO</h2>
                <div class="caixa__icones">
                    <i class="fa fa-codepen" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </main>


</body>




</html>


