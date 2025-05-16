<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Produto.php';
require_once BASE . '/Database/DAOProduto.php';
require_once BASE . '/Database/Conexao.php';

$idproduto = $_POST['idproduto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


$produto = new Produto(
    $nome,
    $descricao,
    $preco,
    $quantidade,
    $idproduto
);

$daoProduto = new DAOProduto();

if ($daoProduto->altera($produto)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Produto/Lista.php');
} else {
    echo 'NÃO atualizando.';
}
?>