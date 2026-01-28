<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Método que responde à rota /cursos
    public function index()
    {
        return "Lista de cursos";
    }

    public function usuarios() {
        $usuarios = ['Ana', 'Davi', 'Pedro'];
        return view('usuarios' , compact('usuarios'));
    }

    public function create()
    {
        return view('create1');
    }

    public function listagem()
    {
        $cursos = ['Laravel Basico', 'Fundamentos de PHP', 'Introdução ao HTML'];

        return view('listagem',  compact('cursos'));
    }

    public function show($id)
    {
        return "Curso selecionado: ID $id";
    }

    public function store(Request $request)
    {
        // Pega o valor do campo 'nome' do formulário
        $nomeCurso = $request->input('nome');

        return "Curso cadastrado: " . $nomeCurso;
    }

}