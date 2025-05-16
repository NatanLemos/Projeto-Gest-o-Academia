<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Novo</h1>
    <form action="AbrirVenda.php" method="post">
        <label for="IdCliente">Cliente:</label>
        <select name="IdCliente" id="IdCliente">
            <option value="null"></option>
            <?php

            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
            require_once BASE . '/Model/Cliente.php';
            require_once BASE . '/Database/DAOCliente.php';
            require_once BASE . '/Database/Conexao.php';
            $DAOCliente = new DAOCliente();
            $lista = $DAOCliente->listaTodos();
            foreach ($lista as $Cliente) {
                $id = $Cliente['IdCliente'];
                $Nome = $Cliente['Nome'];
                echo "<option value='$id'>$Nome</option>";
            }
            ?>
        </select>

        <br>
        <label for="IdFuncionario">Funcionario:</label>
        <select name="IdFuncionario" id="IdFuncionario">
            <option value="null"></option>
            <?php

            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
            require_once BASE . '/Model/Funcionario.php';
            require_once BASE . '/Database/DAOFuncionario.php';
            require_once BASE . '/Database/Conexao.php';

            $DAOFuncionario = new DAOFuncionario();
            $lista = $DAOFuncionario->listaTodos();

            foreach ($lista as $Funcionario) {
                $id = $Funcionario['IdFuncionario'];
                $Nome = $Funcionario['Nome'];
                echo "<option value='$id'>$Nome</option>";
            }
            ?>
        </select>
        <button type="submit">Abrir Venda</button>

    </form>

</body>

</html>