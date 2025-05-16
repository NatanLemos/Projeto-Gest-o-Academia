<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Conjunto_Equipamento.php';
require_once BASE . '/Database/DAOConjunto_Equipamento.php';
require_once BASE . '/Database/Conexao.php';


$id = $_POST['id'];
$idEquipamento = $_POST['idEquipamento'];
$series = $_POST['series'];
$repeticoes = $_POST['repeticoes'];


$Conjunto_Equipamento = new Conjunto_Equipamento($idEquipamento, $series, $repeticoes, $id);
$daoConjunto_Equipamento = new DAOConjunto_Equipamento();

if ($daoConjunto_Equipamento->altera($Conjunto_Equipamento)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Conjunto_Equipamento/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>
