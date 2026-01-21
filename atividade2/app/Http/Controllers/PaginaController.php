<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre()
    {
        return "Agora está certo";
    }

    public function sobre1()
    {
        return view('sobre1');
    }

    public function contato(){
        return view('contato');
    }

     public function usuario($id){
        return 'usuario' .$id;
    }

    public function sobre2()
    {
        return view('paginas.sobre2');
    }
}
