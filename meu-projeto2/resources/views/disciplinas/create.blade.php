    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Nova Disciplina</h1>
<form action="/disciplinas" method="POST">
    @csrf
    <label>Nome da Disciplina:</label>
    <input type="text" name="nome">
    <button type="submit">Salvar</button>
</form>
    </body>
    </html>