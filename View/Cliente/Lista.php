<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
</head>

<body>
    <h1>Listagem De Clientes</h1>
    <table border="1">
        <tr>
            <th>IdCliente</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Mensalidade</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Cliente.php';
        require_once BASE . '/Database/DAOCliente.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOCliente();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['IdCliente'] . '</td>';
            echo '<td>' . $registro['Nome'] . '</td>';
            echo '<td>' . $registro['Telefone'] . '</td>';
            echo '<td>' . $registro['Mensalidade'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdCliente'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $registro['IdCliente'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['Nome'] ?>">
                    <input type="hidden" name="telefone" id="telefone" value="<?= $registro['Telefone'] ?>">
                    <input type="hidden" name="mensalidade" id="mensalidade" value="<?= $registro['Mensalidade'] ?>">

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