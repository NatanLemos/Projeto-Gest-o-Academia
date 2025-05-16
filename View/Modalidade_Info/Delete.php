<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Modalidade_Info.php';
require_once BASE . '/Database/DAOModalidade_Info.php';
require_once BASE . '/Database/Conexao.php';

$daoModalidadeInfo = new DAOModalidade_Info();
$id = $_POST['id'];

if ($daoModalidadeInfo->exclui($id)) {
    header('Location: http://localhost/academia10/View/Modalidade_Info/Lista.php');
} else {
    echo 'Não apagado.';
}
?>