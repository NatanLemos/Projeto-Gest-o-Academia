<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Ficha de Treino</title>
</head>

<body>
    <h1>Listagem De Fichas de Treino</h1>
    <table border="1">
        <tr>
            <th>TipoDeTreino</th>
            <th>IdFicha</th>
            <th>IdFuncionario</th>
            <th>IdCliente</th>
            <th>idconjunto_equipamento</th>
            <th>IdModalidade</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/FichaDeTreino.php';
        require_once BASE . '/Database/DAOFichaDeTreino.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOFichaDeTreino();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['TipoDeTreino'] . '</td>';
            echo '<td>' . $registro['IdFicha'] . '</td>';
            echo '<td>' . $registro['IdFuncionario'] . '</td>';
            echo '<td>' . $registro['IdCliente'] . '</td>';
            echo '<td>' . $registro['idconjunto_equipamento'] . '</td>';
            echo '<td>' . $registro['IdModalidade'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="IdFicha" id="IdFicha" value="<?= $registro['IdFicha'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="TipoDeTreino" id="TipoDeTreino" value="<?= $registro['TipoDeTreino'] ?>">
                    <input type="hidden" name="IdFicha" id="IdFicha" value="<?= $registro['IdFicha'] ?>">
                    <input type="hidden" name="IdFuncionario" id="IdFuncionario" value="<?= $registro['IdFuncionario'] ?>">
                    <input type="hidden" name="IdCliente" id="IdCliente" value="<?= $registro['IdCliente'] ?>">
                    <input type="hidden" name="idconjunto_equipamento" id="idconjunto_equipamento"
                        value="<?= $registro['idconjunto_equipamento'] ?>">
                    <input type="hidden" name="IdModalidade" id="IdModalidade" value="<?= $registro['IdModalidade'] ?>">

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