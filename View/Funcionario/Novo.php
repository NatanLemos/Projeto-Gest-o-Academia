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

    require_once BASE . '/Model/Funcionario.php';
    require_once BASE . '/Database/DAOFuncionario.php';
    require_once BASE . '/Database/Conexao.php';

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $horasSemanais = $_POST['horasSemanais'];
    $numAlunos = $_POST['numAlunos'];

    $funcionario = new Funcionario($nome, $salario, $horasSemanais, $numAlunos);
    $daoFuncionario = new DAOFuncionario();

    if ($daoFuncionario->inclui($funcionario)) {
        echo 'Save';
    } else {
        echo 'Notsave.';
    }
    ?>
    <h1>Lista</h1>
    <button><a href="Lista.php" target="_blank" style="text-decoration:none"> Listar
            Funcionários</a></button>


</body>

</html>