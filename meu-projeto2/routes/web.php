<?php

use Illuminate\Support\Facades\Route;
// Importação do Controller (Essencial)
use App\Http\Controllers\CursoController; 
use App\Http\Controllers\ProdutoController; 
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [CursoController:: class, 'usuarios'])->name('produto.usuario');

Route::post('/produtos', [ProdutoController:: class, 'store']);
Route::get('produtos/create', [ProdutoController:: class, 'create']); 


// Questão 01
Route::get('/cursos', [CursoController::class, 'index']);

// Questão 02
Route::get('/cursos/novos', [CursoController::class, 'create']);

// Questão 3
Route::get('/cursos/lista' , [CursoController::class, 'listagem']);

// Questão 4
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// Questão 5
Route::post('/cursos', [CursoController::class, 'store']);

// Questão 6
Route::resource('alunos', AlunoController::class);

// Questão 07

// Listar
Route::get('/disciplinas', [DisciplinaController::class, 'index']);

// Cadastrar (Formulário e Envio)
Route::get('/disciplinas/novo', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);

// Visualizar (Com parâmetro ID)
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);