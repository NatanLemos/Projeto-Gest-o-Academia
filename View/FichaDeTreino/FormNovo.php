<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ficha de Treino</title>
</head>

<body>
    <h1>Nova Ficha de Treino</h1>
    <form action="novo.php" method="post">
        <label for="tipoDeTreino">Tipo de Treino:</label>
        <input type="text" name="tipoDeTreino" id="tipoDeTreino">
        <br>

        <label for="idFuncionario">ID do Funcionário:</label>
        <input type="text" name="idFuncionario" id="idFuncionario" required>
        <br>

        <label for="idCliente">ID do Cliente:</label>
        <input type="text" name="idCliente" id="idCliente" required>
        <br>

        <label for="idconjunto_equipamento">ID do Conjunto de Equipamento:</label>
        <input type="text" name="idconjunto_equipamento" id="idconjunto_equipamento" required>
        <br>

        <label for="idModalidade">ID da Modalidade:</label>
        <input type="text" name="idModalidade" id="idModalidade" required>
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>