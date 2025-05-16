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

    require_once BASE . '/Model/FichaDeTreino.php';
    require_once BASE . '/Database/DAOFichaDeTreino.php';
    require_once BASE . '/Database/Conexao.php';

    $tipoDeTreino = $_POST['tipoDeTreino'];
    $idFuncionario = $_POST['idFuncionario'];
    $idCliente = $_POST['idCliente'];
    $idconjunto_equipamento = $_POST['idconjunto_equipamento'];
    $idModalidade = $_POST['idModalidade'];

    $FichaDeTreino = new FichaDeTreino($tipoDeTreino, $idFuncionario, $idCliente, $idconjunto_equipamento, $idModalidade);
    $daoFichaDeTreino = new DAOFichaDeTreino();

    if ($daoFichaDeTreino->inclui($FichaDeTreino)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar Fichas de
            Treino</a></button>

</body>

</html>