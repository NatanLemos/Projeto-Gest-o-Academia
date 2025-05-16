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

    require_once BASE . '/Model/Modalidade_Info.php';
    require_once BASE . '/Database/DAOModalidade_Info.php';
    require_once BASE . '/Database/Conexao.php';

    $idModalidade = $_POST['idModalidade'];
    $idCliente = $_POST['idCliente'];
    $idFuncionario = $_POST['idFuncionario'];

    $Modalidade_Info = new Modalidade_Info($idModalidade, $idCliente, $idFuncionario);
    $daoModalidade_Info = new DAOModalidade_Info();

    if ($daoModalidade_Info->inclui($Modalidade_Info)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Modalidades Info</a></button>


</body>

</html>