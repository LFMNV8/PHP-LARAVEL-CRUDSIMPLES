<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    

    public function adicionar()
    {
        return view('adicionar');
    }
    public function erro(){
        return view('erro');
    }

    public function erro2(){
        return view('erro2');
    }


    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carregamento2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function carregamento3()
    {
        return view('carregamento3');
    }

    public function carregamento4()
    {
        return view('remover');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('ver');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('atualizar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        return view('carregamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        return view('remover');
    }
}
