<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Administrador.php';
require_once BASE . '/Database/DAOAdministrador.php';
require_once BASE . '/Database/Conexao.php';

$daoAdministrador = new DAOAdministrador();
$id = $_POST['id'];

if ($daoAdministrador->exclui($id)) {
    header('Location: http://localhost/academia10/View/Administrador/Lista.php');
} else {
    echo 'Não apagado.';
}
?>