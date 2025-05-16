<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>

<body>

    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

    require_once BASE . '/Model/Modalidade.php';
    require_once BASE . '/Database/DAOModalidade.php';
    require_once BASE . '/Database/Conexao.php';

    $nomeDaModalidade = $_POST['nomeDaModalidade'];
    $tipo = $_POST['tipo'];
    $qtdDias = $_POST['qtdDias'];
    $nmrAlunos = $_POST['nmrAlunos'];

    $modalidade = new Modalidade($nomeDaModalidade, $tipo, $qtdDias, $nmrAlunos);
    $daoModalidade = new DAOModalidade();

    if ($daoModalidade->inclui($modalidade)) {
        include_once('teste.php');
    } else {
        echo 'Notsave.';
    }
    ?>
</body>

</html>