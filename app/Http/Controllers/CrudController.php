<?php

namespace App\Http\Controllers;
use App\Models\Jogos;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create(Request $request)
    {
        $dados = $request->validate([
            'titulo'=> 'required|string',
            'genero'=> 'required|string',
            'plataforma'=> 'required|string',
            'data_lancamento'=> 'required|date',
            'desenvolvedora'=> 'required|string'
        ]);
        
        $titulo = $dados['titulo'];

        $tituloexistente = Jogos::all()->where('titulo', $titulo)->first();

        if($tituloexistente){
            return view('erro');
        }else{
            $novojogo = Jogos::create($dados);
            return view('ver');
        }

    
    }

    public function atualizar(Request $request)
{
   
    $id = $request->input('id_jogo');
    
    
    $jogo = Jogos::find($id);

    
    if ($jogo) {
        
        $jogo->titulo = $request->input('titulo');
        $jogo->genero = $request->input('genero');
        $jogo->plataforma = $request->input('plataforma');
        $jogo->data_lancamento = $request->input('data_lancamento');
        $jogo->desenvolvedora = $request->input('desenvolvedora');
        $jogo->save();
        return view('ver');
    } else {
        return view('erro2');
    }
}


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $jogos = Jogos::all();

        $items = [];

        foreach($jogos as $jogo){
            $items [] = [
                'id_jogo'=>$jogo->id_jogo,
                'titulo'=>$jogo->titulo,
                'genero'=>$jogo->genero,
                'plataforma'=>$jogo->plataforma,
                'data_lancamento'=>$jogo->data_lancamento,
                'densenvolvedora'=>$jogo->densenvolvedora
            ];
        }

        return view('ver', compact('jogos'));

    



    }

    
   

   
    public function destroy(request $request)
    {
        $titulo = $request->input('titulo');
    
        $jogo = Jogos::where('titulo', $titulo)->first();

        if ($jogo) {
        
            $jogo->delete();
            return view('ver');
        }else{
            return view('erro2');
        }
    }
}
