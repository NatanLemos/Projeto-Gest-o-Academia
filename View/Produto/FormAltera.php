<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>
</head>

<?php
$idproduto = $_POST['idproduto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

?>

<body>
    <h1>Editar Funcionario</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="idproduto" id="idproduto" value="<?= $idproduto ?>">
        <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>">
        <br>

        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="descricao" value="<?= $descricao ?>">
        <br>

        <label for="preco">Preco:</label>
        <input type="text" name="preco" id="preco" value="<?= $preco ?>">
        <br>

        <label for="quantidade">quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="<?= $quantidade ?>">
        <br>

        <button type="buttom">Salvar</button>
    </form>
</body>

</html>