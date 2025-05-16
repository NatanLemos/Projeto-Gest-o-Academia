<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Ficha de Treino</title>
</head>
<?php

$tipoDeTreino = $_POST['TipoDeTreino'];
$idFicha = $_POST['IdFicha'];
$idFuncionario = $_POST['IdFuncionario'];
$idCliente = $_POST['IdCliente'];
$idConjuntoEquipamento = $_POST['idconjunto_equipamento'];
$idModalidade = $_POST['IdModalidade'];

?>

<body>
    <h1>Alterar Ficha de Treino</h1>
    <form action="Update.php" method="post">

        <input type="hidden" name="IdFicha" id="IdFicha" value="<?= $idFicha ?>">
        <br>

        <label for="TipoDeTreino">Tipo de Treino:</label>
        <input type="text" name="TipoDeTreino" id="TipoDeTreino" value="<?= $tipoDeTreino ?>">
        <br>

        <label for="IdFuncionario">ID do Funcionário:</label>
        <input type="number" name="IdFuncionario" id="IdFuncionario" value="<?= $idFuncionario ?>">
        <br>

        <label for="IdCliente">ID do Cliente:</label>
        <input type="number" name="IdCliente" id="IdCliente" value="<?= $idCliente ?>">
        <br>

        <label for="idconjunto_equipamento">ID do Conjunto de Equipamento:</label>
        <input type="number" name="idconjunto_equipamento" id="idconjunto_equipamento"
            value="<?= $idConjuntoEquipamento ?>">
        <br>

        <label for="IdModalidade">ID da Modalidade:</label>
        <input type="number" name="IdModalidade" id="IdModalidade" value="<?= $idModalidade ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>