<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/Modalidade.php';
require_once BASE . '/Database/DAOModalidade.php';
require_once BASE . '/Database/Conexao.php';

$daoModalidade = new DAOModalidade();
$id = $_POST['IdModalidade'];

if ($daoModalidade->exclui($id)) {
    header('Location: http://localhost/academia10/View/Modalidade/Lista.php');
} else {
    echo 'Não apagado.';
}
?>