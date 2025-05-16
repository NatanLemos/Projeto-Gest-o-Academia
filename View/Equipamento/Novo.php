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

    require_once BASE . '/Model/Equipamento.php';
    require_once BASE . '/Database/DAOEquipamento.php';
    require_once BASE . '/Database/Conexao.php';

    $quantidade = $_POST['quantidade'];
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];

    $equipamento = new Equipamento($quantidade, $nome, $peso);
    $daoEquipamento = new DAOEquipamento();

    if ($daoEquipamento->inclui($equipamento)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar
            Equipamentos</a></button>

</body>

</html>