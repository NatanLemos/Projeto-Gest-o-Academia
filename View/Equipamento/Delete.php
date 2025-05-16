<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Equipamento.php';
require_once BASE . '/Database/DAOEquipamento.php';
require_once BASE . '/Database/Conexao.php';

$daoEquipamento = new DAOEquipamento();
$id = $_POST['id'];

if ($daoEquipamento->exclui($id)) {
    header('Location: http://localhost/academia10/View/Equipamento/Lista.php');
} else {
    echo 'Não apagado.';
}
?>
