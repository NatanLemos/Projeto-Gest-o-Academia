<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Equipamento.php';
require_once BASE . '/Database/DAOEquipamento.php';
require_once BASE . '/Database/Conexao.php';

$id = $_POST['id'];
$quantidade = $_POST['quantidade'];
$nome = $_POST['nome'];
$peso = $_POST['peso'];


$equipamento = new Equipamento($quantidade, $nome, $peso, $id);
$daoEquipamento = new DAOEquipamento();

if ($daoEquipamento->altera($equipamento)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Equipamento/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>