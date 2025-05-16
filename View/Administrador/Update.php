<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Administrador.php';
require_once BASE . '/Database/DAOAdministrador.php';
require_once BASE . '/Database/Conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$idFuncionario = $_POST['idfuncionario'];

$administrador = new Administrador($usuario, $senha, $idFuncionario);
$daoAdministrador = new DAOAdministrador();

if ($daoAdministrador->altera($administrador)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Administrador/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>