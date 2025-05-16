<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Modalidade_Info.php';
require_once BASE . '/Database/DAOModalidade_Info.php';
require_once BASE . '/Database/Conexao.php';

$idModalidadeInfo = $_POST['idmodalidade_info'];
$idModalidade = $_POST['idmodalidade'];
$idCliente = $_POST['idcliente'];
$idFuncionario = $_POST['idFuncionario'];

$modalidadeInfo = new Modalidade_Info($idModalidade, $idCliente, $idFuncionario, $idModalidadeInfo);
$daoModalidadeInfo = new DAOModalidade_Info();

if ($daoModalidadeInfo->altera($modalidadeInfo)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Modalidade_Info/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>