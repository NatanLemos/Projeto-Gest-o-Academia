<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Administrador</title>
</head>
<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$idfuncionario = $_POST['id'];

?>

<body>
    <h1>Novo Administrador</h1>
    <form action="Update.php" method="post">

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?= $usuario ?>">
        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?= $senha ?>">
        <br>

        <label for="idfuncionario">ID do Funcionário:</label>
        <input type="number" name="id" id="id" value="<?= $idfuncionario ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>