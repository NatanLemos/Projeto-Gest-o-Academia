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

    require_once BASE . '/Model/Conjunto_Equipamento.php';
    require_once BASE . '/Database/DAOConjunto_Equipamento.php';
    require_once BASE . '/Database/Conexao.php';

    $idEquipamento = $_POST['idEquipamento'];
    $series = $_POST['series'];
    $repeticoes = $_POST['repeticoes'];

    $conjuntoEquipamento = new Conjunto_Equipamento($idEquipamento, $series, $repeticoes);
    $daoConjuntoEquipamento = new DAOConjunto_Equipamento();

    if ($daoConjuntoEquipamento->inclui($conjuntoEquipamento)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Conjuntos de
            Equipamento</a></button>
</body>

</html>