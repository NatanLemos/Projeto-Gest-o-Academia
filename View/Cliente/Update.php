<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Cliente.php';
require_once BASE . '/Database/DAOCliente.php';
require_once BASE . '/Database/Conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$mensalidade = $_POST['mensalidade'];
$id = $_POST['id'];


$cliente = new Cliente($nome, $telefone, $mensalidade, $id);
$daoCliente = new DAOCliente();

if ($daoCliente->altera($cliente)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Cliente/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>