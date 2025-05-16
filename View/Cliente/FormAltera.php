<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$mensalidade = $_POST['mensalidade'];
$id = $_POST['id'];

?>

<body>
    <h1>Novo Cliente</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?= $telefone ?>">
        <br>

        <label for="mensalidade">Mensalidade:</label>
        <input type="number" name="mensalidade" id="mensalidade" value="<?= $mensalidade ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>
