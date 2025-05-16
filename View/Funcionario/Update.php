<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Funcionario.php';
require_once BASE . '/Database/DAOFuncionario.php';
require_once BASE . '/Database/Conexao.php';

$id = $_POST['id'];
$nome = $_POST['Nome'];
$salario = $_POST['Salario'];
$horasSemanais = $_POST['HorasSemanais'];
$numAlunos = $_POST['NumAlunos'];

$funcionario = new Funcionario($nome, $salario, $horasSemanais, $numAlunos, $id);
$daoFuncionario = new DAOFuncionario();

if ($daoFuncionario->altera($funcionario)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Funcionario/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>