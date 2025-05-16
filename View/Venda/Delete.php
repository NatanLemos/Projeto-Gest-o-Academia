<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Venda.php';
require_once BASE . '/Database/DAOVenda.php';
require_once BASE . '/Database/Conexao.php';

$daoVenda = new DAOVenda();
$id = $_POST['id'];

if ($daoVenda->exclui($id)) {
    header('Location: http://localhost/academia10/View/Venda/Lista.php');
} else {
    echo 'Erro ao excluir Venda.';
}
?>