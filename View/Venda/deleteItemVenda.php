<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Venda.php';
require_once BASE . '/Database/DAOItemVenda.php';
require_once BASE . '/Database/Conexao.php';

$daoItemVenda = new DAOItemVenda();
$id = $_POST['id'];

if ($daoItemVenda->exclui($id)) {
    header('Location: http://localhost/academia10/View/Venda/FormCadastroItemVenda.php');
} else {
    echo 'Erro ao excluir Venda.';
}
?>