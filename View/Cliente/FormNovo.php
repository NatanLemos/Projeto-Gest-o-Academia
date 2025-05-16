<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
</head>

<body>
    <h1>Novo Cliente</h1>
    <form action="Novo.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
        <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">
        <br>

        <label for="mensalidade">Mensalidade:</label>
        <input type="text" name="mensalidade" id="mensalidade">
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>
