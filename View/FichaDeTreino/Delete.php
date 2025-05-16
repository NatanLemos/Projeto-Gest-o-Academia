<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');

require_once BASE . '/Model/FichaDeTreino.php';
require_once BASE . '/Database/DAOFichaDeTreino.php';
require_once BASE . '/Database/Conexao.php';

$daoFichaDeTreino = new DAOFichaDeTreino();
$id = $_POST['IdFicha'];

if ($daoFichaDeTreino->exclui($id)) {
    header('Location: http://localhost/academia10/View/FichaDeTreino/Lista.php');
} else {
    echo 'Não apagado.';
}
?>