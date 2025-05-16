<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Conjunto de Equipamentos</title>
</head>

<body>
    <h1>Listagem De Conjunto de Equipamentos</h1>
    <table border="1">
        <tr>
            <th>idconjunto_equipamento</th>
            <th>idEquipamento</th>
            <th>series</th>
            <th>repeticoes</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Conjunto_Equipamento.php';
        require_once BASE . '/Database/DAOConjunto_Equipamento.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOConjunto_Equipamento();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idconjunto_equipamento'] . '</td>';
            echo '<td>' . $registro['idEquipamento'] . '</td>';
            echo '<td>' . $registro['series'] . '</td>';
            echo '<td>' . $registro['repeticoes'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['idconjunto_equipamento'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['idconjunto_equipamento'] ?>">
                    <input type="hidden" name="idEquipamento" id="idEquipamento" value="<?= $registro['idEquipamento'] ?>">
                    <input type="hidden" name="series" id="series" value="<?= $registro['series'] ?>">
                    <input type="hidden" name="repeticoes" id="repeticoes" value="<?= $registro['repeticoes'] ?>">

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