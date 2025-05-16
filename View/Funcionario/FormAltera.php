<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Funcionário</title>
</head>
<?php

$id = $_POST['id'];
$nome = $_POST['Nome'];
$salario = $_POST['Salario'];
$horasSemanais = $_POST['HorasSemanais'];
$numAlunos = $_POST['NumAlunos'];

?>

<body>
    <h1>Alterar Funcionário</h1>
    <form action="update.php" method="post">

        <input type="hidden" name="id" id="id" value="<?= $id ?>">
        <br>

        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" id="Nome" value="<?= $nome ?>">
        <br>

        <label for="Salario">Salário:</label>
        <input type="number" name="Salario" id="Salario" value="<?= $salario ?>">
        <br>

        <label for="HorasSemanais">Horas Semanais:</label>
        <input type="text" name="HorasSemanais" id="HorasSemanais" value="<?= $horasSemanais ?>">
        <br>

        <label for="NumAlunos">Número de Alunos:</label>
        <input type="number" name="NumAlunos" id="NumAlunos" value="<?= $numAlunos ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

</body>

</html>