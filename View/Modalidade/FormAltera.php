<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Modalidade</title>
</head>
<?php

$idModalidade = $_POST['IdModalidade'];
$nomeDaModalidade = $_POST['NomeDaModalidade'];
$tipo = $_POST['Tipo'];
$qtdDias = $_POST['QTDdias'];
$nmrAlunos = $_POST['NmrAlunos'];

?>

<body>
    <h1>Alterar Modalidade</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="IdModalidade" id="IdModalidade" value="<?= $idModalidade ?>">
        <br>

        <label for="NomeDaModalidade">Nome da Modalidade:</label>
        <input type="text" name="NomeDaModalidade" id="NomeDaModalidade" value="<?= $nomeDaModalidade ?>">
        <br>

        <label for="Tipo">Tipo:</label>
        <input type="text" name="Tipo" id="Tipo" value="<?= $tipo ?>">
        <br>

        <label for="QTDdias">Quantidade de Dias:</label>
        <input type="number" name="QTDdias" id="QTDdias" value="<?= $qtdDias ?>">
        <br>

        <label for="NmrAlunos">Número de Alunos:</label>
        <input type="number" name="NmrAlunos" id="NmrAlunos" value="<?= $nmrAlunos ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>