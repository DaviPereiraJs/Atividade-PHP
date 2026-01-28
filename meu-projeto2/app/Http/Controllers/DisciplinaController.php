<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // 1. Listar (index) - Envia um array de dados para a view
    public function index()
    {
        $disciplinas = ['Banco de Dados', 'Desenvolvimento Web', 'Estrutura de Dados'];
        return view('disciplinas.index', compact('disciplinas'));
    }

    // 2. Cadastrar - Formulário (create)
    public function create()
    {
        return view('disciplinas.create');
    }

    // 3. Cadastrar - Receber dados (store)
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Disciplina cadastrada com sucesso: " . $nome;
    }

    // 4. Visualizar (show) - Recebe o ID pela rota
    public function show($id)
    {
        return view('disciplinas.show', compact('id'));
    }
}