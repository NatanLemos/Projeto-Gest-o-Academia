<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>

<body>

    <h1>Novo</h1>

    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

    require_once BASE . '/Model/Produto.php';
    require_once BASE . '/Database/DAOProduto.php';
    require_once BASE . '/Database/Conexao.php';


    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $Produto = new Produto($nome, $descricao, $preco, $quantidade);
    $daoProduto = new DAOProduto();

    if ($daoProduto->inclui($Produto)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }

    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Produtos</a></button>

</body>

</html>