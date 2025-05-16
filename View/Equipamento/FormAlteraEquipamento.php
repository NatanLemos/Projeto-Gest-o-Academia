<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Equipamento</title>
</head>
<?php

$id = $_POST['id'];
$quantidade = $_POST['quantidade'];
$nome = $_POST['nome'];
$peso = $_POST['peso'];

?>

<body>
    <h1>Novo Equipamento</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="<?= $quantidade ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="peso">Peso:</label>
        <input type="number" step="0.01" name="peso" id="peso" value="<?= $peso ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>