<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Conjunto_Equipamento.php';
require_once BASE . '/Database/DAOConjunto_Equipamento.php';
require_once BASE . '/Database/Conexao.php';

$daoConjuntoEquipamento = new DAOConjunto_Equipamento();
$id = $_POST['id'];

if ($daoConjuntoEquipamento->exclui($id)) {
    header('Location: http://localhost/academia10/View/Conjunto_Equipamento/Lista.php');
} else {
    echo 'Não apagado.';
}
?>