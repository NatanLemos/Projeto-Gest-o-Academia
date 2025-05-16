<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações de Modalidade</title>
</head>
<?php

$idModalidadeInfo = $_POST['idmodalidade_info'];
$idModalidade = $_POST['idmodalidade'];
$idCliente = $_POST['idcliente'];
$idFuncionario = $_POST['idFuncionario'];

?>

<body>
    <h1>Novas Informações de Modalidade</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="idmodalidade_info" id="idmodalidade_info" value="<?= $idModalidadeInfo ?>">
        <br>

        <label for="idmodalidade">ID da Modalidade:</label>
        <input type="number" name="idmodalidade" id="idmodalidade" value="<?= $idModalidade ?>">
        <br>

        <label for="idcliente">ID do Cliente:</label>
        <input type="number" name="idcliente" id="idcliente" value="<?= $idCliente ?>">
        <br>

        <label for="idFuncionario">ID do Funcionário:</label>
        <input type="number" name="idFuncionario" id="idFuncionario" value="<?= $idFuncionario ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>