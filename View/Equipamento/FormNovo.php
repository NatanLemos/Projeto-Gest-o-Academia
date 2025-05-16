<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Equipamento</title>
</head>

<body>
    <h1>Novo Equipamento</h1>
    <form action="Novo.php" method="post">
        <label for="quantidade">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>

        <label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso" required>
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>