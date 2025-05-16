<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Cliente.php';
require_once BASE . '/Database/DAOCliente.php';
require_once BASE . '/Database/Conexao.php';

$daoCliente = new DAOCliente();
$id = $_POST['id'];

if ($daoCliente->exclui($id)) {
    header('Location: http://localhost/academia10/View/Cliente/Lista.php');
} else {
    echo 'Não apagado.';
}
?>
