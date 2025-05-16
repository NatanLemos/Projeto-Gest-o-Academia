<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Vendas</title>
</head>

<body>
    <h1>Listagem de Vendas</h1>
    <table border="1">
        <tr>
            <th>idvenda</th>
            <th>Situacao</th>
            <th>Datavenda</th>
            <th>Totalvenda</th>
            <th>Funcionario</th>
            <th>Cliente</th>
            <th>Ação</th>
        </tr>
        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Venda.php';
        require_once BASE . '/Database/DAOVenda.php';
        require_once BASE . '/Database/Conexao.php';

        $daoVenda = new DaoVenda();
        $lista = $daoVenda->listaTodos();

        foreach ($lista as $venda) {
            echo '<tr>';
            echo '<td>' . $venda['idvenda'] . '</td>';
            echo '<td>' . $venda['situacao'] . '</td>';
            echo '<td>' . $venda['datavenda'] . '</td>';
            echo '<td>' . $venda['totalvenda'] . '</td>';
            echo '<td>' . $venda['IdFuncionario'] . '</td>';
            echo '<td>' . $venda['Idcliente'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $venda['idvenda'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>