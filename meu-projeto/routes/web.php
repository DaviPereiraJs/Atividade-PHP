<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController\cuso\ads;

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/produto/{id}/{categoria?}/', function ($id, $categoria = "nula"){
//     return "O ID do produto é:" .$id. "e a categoria é: .$categoria";
// });



// Route::get('/sobre',[PaginaController::class, "sobre"]);

// Questão 1
Route::get('/', function () {
    return "Olá Laravel.";
});

// Questão 2
Route::get('/curso/ads', function () {
    return "Curso de Análise e Desenvolvimento de Sistemas.";
});

// Questão 3
Route::get('/curso/web', function () {
    return "Disciplina Progamação Web 1.";
});

// Questão 4
Route::get('/sobre', function (){
    return view('sobre');
});

// Questão 5
Route::get('/contato', function (){
    return view('contato');
});

// Questão 6
Route::get('/instituicao/missao', function (){
    return view('instituicao/missao');
});

// Questão 7
Route::get('/empresa',[PaginaController::class, 'empresa']);

// Questão 8
Route::get('/servicos', [PaginaController::class, 'servicos']);

// Questão 9
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/portifolio', [PaginaController::class, 'portifolio']);

// Questão 10
Route::get('/equipe', [PaginaController::class, 'equipe']);
// o erro inicialmente é porque não foi criado o metodo no arquivo PaginaController

// Questão 11
Route::get('/usuario/{nome}', function ($nome){
    return "Usuario: " .$nome;
});

// Questão 12 
Route::get('/produto/{id}', [PaginaController:: class, 'mostrar']);
// O Laravel envia o valor da URL {id}
// automaticamente para a variável $id

