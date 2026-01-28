<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function store(Request $request) {
        $nome = $request->input('nome');
        return "Produto: $nome";
    }

    public function create() {
        return view('create');
    }
}