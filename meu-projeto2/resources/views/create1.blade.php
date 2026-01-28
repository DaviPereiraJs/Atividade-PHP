<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Curso</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>

    <form action="/cursos" method="POST">
        @csrf

        <label>Nome do Curso:</label>
        <input type="text" name="nome" placeholder="Digite o nome">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>