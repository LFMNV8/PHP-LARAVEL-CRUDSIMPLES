<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Games</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/ver.css')}}">
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

<div class="fundo">
    <form action="{{route('ver')}}" method="post">
    @if(isset($jogos)) 
    <table>
    
        <THEad>
            <tr>
                <th>ID JOGO</th>
                <th>TITULO</th>
                <th>GENERO</th>
                <th>PLATAFORMA</th>
                <th>DATA LANCAMENTO</th>
                <th>DENSENVOLVEDORA</th>
            </tr>
        </THEad>
        <TBOdy>
            @foreach($jogos as $jogo)
            <tr>
                <td>{{$jogo['id_jogo']}}</td>
                <td>{{$jogo['titulo']}}</td>
                <td>{{$jogo['genero']}}</td>
                <td>{{$jogo['plataforma']}}</td>
                <td>{{$jogo['data_lancamento']}}</td>
                <td>{{$jogo['desenvolvedora']}}</td>
            </tr>
            @endforeach
        </TBOdy>
        
        

    @else
    
    <button id='jogos'>Jogos</button>
    </table>
    @endif
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</div>
    
</body>
</html>