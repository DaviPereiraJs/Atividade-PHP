<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    // Procura em resources/views/alunos/index.blade.php
    return view('06.index'); 
}

public function create()
{
    // Procura em resources/views/alunos/create.blade.php
    return view('06.create');
}

public function show(string $id)
{
    // Envia o ID para a view
    return view('06.show', compact('id'));
}

public function store(Request $request)
{
    // O método store NÃO tem view própria.
    // Ele processa os dados e geralmente redireciona o usuário de volta para a lista.
    return "Dados recebidos! (Aqui faríamos o redirect)";
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
