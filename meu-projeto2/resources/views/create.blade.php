<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>

    <form action="/produtos" method="POST">
        @csrf 

        <label>Nome do produto:</label><br>
        <input type="text" name="nome"><br><br>

        <button type="submit"> Cadastrar</button>
    </form>
</body>
</html>