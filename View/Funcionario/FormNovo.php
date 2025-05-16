<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
</head>

<body>
    <h1>Novo Funcionário</h1>
    <form action="novo.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>

        <label for="salario">Salário:</label>
        <input type="text" name="salario" id="salario">
        <br>

        <label for="horasSemanais">Horas Semanais:</label>
        <input type="text" name="horasSemanais" id="horasSemanais">
        <br>

        <label for="numAlunos">Número de Alunos:</label>
        <input type="text" name="numAlunos" id="numAlunos">
        <br>

        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>