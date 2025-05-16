<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Produto.php';
require_once BASE . '/Database/DAOProduto.php';
require_once BASE . '/Database/Conexao.php';

$daoProduto = new DAOProduto();
$id = $_POST['id'];

if ($daoProduto->exclui($id)) {
    header('Location: http://localhost/academia10/View/Produto/Lista.php');
} else {
    echo 'Erro ao excluir produto.';
}
?>

?>