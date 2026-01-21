<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

//  Questão 1
Route::get('/sobre', [PaginaController::class, 'sobre']);
// o erro é o uso da crase nos nomes "sobre" e precisa criar o medoto na PaginaController

// Questão 2
// o erro é que so esta criada a class principal e a sub class que vai chamar a rota sobre ainda não está criada
Route::get('/sobre', [PaginaController::class, 'sobre']);

// Questão 3
// o erro é o uso da crase e a falta do arquivo sobre.blade.php
Route::get('/sobre1', [PaginaController::class, 'sobre1']);

// Questão 4
// o erro da 4, é que mesmo que a view tenha sido criada, o erro se da por conta que ja foi criado um metodo sobre anteriormente para a questão 3

// Questão 5
Route::get('/contato', [PaginaController::class, 'contato']);
// o erro está no uso das crases
// O use serve para importar uma classe usando o namespace dela, para que você não precise escrever o nome completo da classe toda vez.

// Questão 6
Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);
// o erro é o uso das crases 
// o metodo no controller ta errado porque ta faltando chamar o id dentro dos parenteses e no return

// Questão 7
// O erro ocorre porque o Laravel processa as rotas de cima para baixo e a rota com parâmetro {id} captura qualquer valor, impedindo que a rota /produto/novo seja executada.
Route::get('/produto/novo', function () {
return "Novo Produto";
});
Route::get('/produto/{id}', function ($id) {
return "Produto $id";
});

// Questão 8
// O erro ocorre porque a rota foi definida com o método HTTP POST, enquanto o navegador realiza requisições do tipo GET.
Route::get('/servicos', function () {
    return "Serviços";
});

// Questão 9
// O erro ocorre porque a view está em um subdiretório e o caminho informado não corresponde à sua localização. A correção é informar o caminho completo da view usando a notação com ponto.
Route::get('/sobre2', [PaginaController::class, 'sobre2']);

// Questão 10
// rotas duplicadas são um problema porque a última definição sobrescreve a anterior, tornando a primeira inacessível.
// a solução seria criar rotas diferentes
Route::get('/blog', function () {
    return "Blog 1";
});

Route::get('/blog/admin', function () {
    return "Blog 2";
});
