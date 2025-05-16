<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Equipamentos</title>
</head>

<body>
    <h1>Listagem De Equipamentos</h1>
    <table border="1">
        <tr>
            <th>IdEquipamento</th>
            <th>Quantidade</th>
            <th>Nome</th>
            <th>Peso</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Equipamento.php';
        require_once BASE . '/Database/DAOEquipamento.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOEquipamento();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['IdEquipamento'] . '</td>';
            echo '<td>' . $registro['Quantidade'] . '</td>';
            echo '<td>' . $registro['Nome'] . '</td>';
            echo '<td>' . $registro['Peso'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdEquipamento'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdEquipamento'] ?>">
                    <input type="hidden" name="quantidade" id="quantidade" value="<?= $registro['Quantidade'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['Nome'] ?>">
                    <input type="hidden" name="peso" id="peso" value="<?= $registro['Peso'] ?>">

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