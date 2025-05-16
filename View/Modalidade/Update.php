<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/Modalidade.php';
require_once BASE . '/Database/DAOModalidade.php';
require_once BASE . '/Database/Conexao.php';

$idModalidade = $_POST['IdModalidade'];
$nomeDaModalidade = $_POST['NomeDaModalidade'];
$tipo = $_POST['Tipo'];
$qtdDias = $_POST['QTDdias'];
$nmrAlunos = $_POST['NmrAlunos'];

$modalidade = new Modalidade($nomeDaModalidade, $tipo, $qtdDias, $nmrAlunos, $idModalidade);
$daoModalidade = new DAOModalidade();

if ($daoModalidade->altera($modalidade)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/Modalidade/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>