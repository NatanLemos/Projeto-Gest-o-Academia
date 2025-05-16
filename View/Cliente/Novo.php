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

    require_once BASE . '/Model/Cliente.php';
    require_once BASE . '/Database/DAOCliente.php';
    require_once BASE . '/Database/Conexao.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $mensalidade = $_POST['mensalidade'];

    $Cliente = new Cliente($cpf, $telefone, $mensalidade, $nome);
    $daoCliente = new DAOCliente();

    if ($daoCliente->inclui($Cliente)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Clientes</a></button>

</body>

</html>