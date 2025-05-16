<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Funcionario.php';
require_once BASE . '/Database/DAOFuncionario.php';
require_once BASE . '/Database/Conexao.php';

$daoFuncionario = new DAOFuncionario();
$id = $_POST['id'];

if ($daoFuncionario->exclui($id)) {
    header('Location: http://localhost/academia10/View/Funcionario/Lista.php');
} else {
    echo 'Não apagado.';
}
?>