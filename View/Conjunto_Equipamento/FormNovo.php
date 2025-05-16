<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Conjunto de Equipamento</title>
</head>

<body>
    <h1>Novo Conjunto de Equipamento</h1>
    <form action="Novo.php" method="post">
        <label for="idEquipamento">ID do Equipamento:</label>
        <input type="text" name="idEquipamento" id="idEquipamento" required>
        <br>

        <label for="series">Séries:</label>
        <input type="text" name="series" id="series" required>
        <br>

        <label for="repeticoes">Repetições:</label>
        <input type="text" name="repeticoes" id="repeticoes" required>
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>