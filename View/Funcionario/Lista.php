<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionários</title>
</head>

<body>
    <h1>Listagem De Funcionários</h1>
    <table border="1">
        <tr>
            <th>IdFuncionario</th>
            <th>Nome</th>
            <th>Salario</th>
            <th>HorasSemanais</th>
            <th>NumAlunos</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Funcionario.php';
        require_once BASE . '/Database/DAOFuncionario.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOFuncionario();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['IdFuncionario'] . '</td>';
            echo '<td>' . $registro['Nome'] . '</td>';
            echo '<td>' . $registro['Salario'] . '</td>';
            echo '<td>' . $registro['HorasSemanais'] . '</td>';
            echo '<td>' . $registro['NumAlunos'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdFuncionario'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdFuncionario'] ?>">
                    <input type="hidden" name="Nome" id="Nome" value="<?= $registro['Nome'] ?>">
                    <input type="hidden" name="Salario" id="Salario" value="<?= $registro['Salario'] ?>">
                    <input type="hidden" name="HorasSemanais" id="HorasSemanais" value="<?= $registro['HorasSemanais'] ?>">
                    <input type="hidden" name="NumAlunos" id="NumAlunos" value="<?= $registro['NumAlunos'] ?>">
                    <button>Editar</button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>