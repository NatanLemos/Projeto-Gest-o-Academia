<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Modalidades Info</title>
</head>

<body>
    <h1>Listagem De Modalidades Info</h1>
    <table border="1">
        <tr>
            <th>idmodalidade_info</th>
            <th>idmodalidade</th>
            <th>idcliente</th>
            <th>idFuncionario</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Modalidade_Info.php';
        require_once BASE . '/Database/DAOModalidade_Info.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOModalidade_Info();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idmodalidade_info'] . '</td>';
            echo '<td>' . $registro['idmodalidade'] . '</td>';
            echo '<td>' . $registro['idcliente'] . '</td>';
            echo '<td>' . $registro['idFuncionario'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['idmodalidade_info'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="idmodalidade_info" id="idmodalidade_info" value="<?= $registro['idmodalidade_info'] ?>">
                    <input type="hidden" name="idmodalidade" id="idmodalidade" value="<?= $registro['idmodalidade'] ?>">
                    <input type="hidden" name="idcliente" id="idcliente" value="<?= $registro['idcliente'] ?>">
                    <input type="hidden" name="idFuncionario" id="idFuncionario" value="<?= $registro['idFuncionario'] ?>">

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