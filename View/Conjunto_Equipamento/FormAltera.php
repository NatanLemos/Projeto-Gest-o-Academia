<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Conjunto de Equipamento</title>
</head>
<?php

$id = $_POST['id'];
$idEquipamento = $_POST['idEquipamento'];
$series = $_POST['series'];
$repeticoes = $_POST['repeticoes'];

?>

<body>
    <h1>Alterar Conjunto de Equipamento</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="idEquipamento">ID do Equipamento:</label>
        <input type="number" name="idEquipamento" id="idEquipamento" value="<?= $idEquipamento ?>">
        <br>

        <label for="series">Séries:</label>
        <input type="number" name="series" id="series" value="<?= $series ?>">
        <br>

        <label for="repeticoes">Repetições:</label>
        <input type="number" name="repeticoes" id="repeticoes" value="<?= $repeticoes ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>