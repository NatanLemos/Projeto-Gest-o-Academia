<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

require_once BASE . '/Model/FichaDeTreino.php';
require_once BASE . '/Database/DAOFichaDeTreino.php';
require_once BASE . '/Database/Conexao.php';

$tipoDeTreino = $_POST['TipoDeTreino'];
$idFicha = $_POST['IdFicha'];
$idFuncionario = $_POST['IdFuncionario'];
$idCliente = $_POST['IdCliente'];
$idConjuntoEquipamento = $_POST['idconjunto_equipamento'];
$idModalidade = $_POST['IdModalidade'];

$fichaTreino = new FichaDeTreino($tipoDeTreino, $idFicha, $idFuncionario, $idCliente, $idConjuntoEquipamento, $idModalidade);
$daoFichaTreino = new DAOFichaDeTreino();

if ($daoFichaTreino->altera($fichaTreino)) {
    echo 'Atualizando';
    header('Location: http://localhost/academia10/View/FichaDeTreino/Lista.php');
} else {
    echo 'NÃO Atualizando.';
}
?>