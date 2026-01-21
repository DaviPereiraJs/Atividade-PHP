<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // são as entidades do laravel: use = import

class PaginaController extends Controller
{
    public function empresa()
    {
        return "Esta é a página da empresa.";
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portifolio()
    {
        return view('portifolio');
    }

     public function equipe()
    {
        return view('equipe');
    }

     public function mostrar($id)
    {
        return "O ID do produto é: ".$id;
    }
}
