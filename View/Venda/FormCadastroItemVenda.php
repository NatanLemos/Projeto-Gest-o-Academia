<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Venda</title>

</head>

<body>
    <div class="container">
        <h1>Itens da Venda</h1>
        <form action="cadastraItemVenda.php" method="post">
            <label for="idproduto">Produto</label><br>
            <select name="idproduto" id="idproduto">
                <?php
                define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

                require_once BASE . '/Model/Produto.php';
                require_once BASE . '/Database/DAOProduto.php';
                require_once BASE . '/Database/Conexao.php';

                $DAOProduto = new DAOProduto();
                $lista = $DAOProduto->listaTodos();
                foreach ($lista as $Produto) {
                    echo '<option value="' . $Produto['idproduto'] . '">' . $Produto['nome'] . '</option>';
                }
                ?>
            </select><br>

            <label for="quantidade">Quantidade</label><br>
            <input type="number" name="quantidade" id="quantidade"><br>
            <button>Adicionar</button>
        </form>
        <br>

        <table border="1">
            <tr>
                <th>iditemVenda</th>
                <th>PRODUTO</th>
                <th>QUANTIDADE</th>
                <th>SUBTOTAL</th>
                <th>Ação</th>
            </tr>
            <?php
            require_once BASE . '/Database/DAOItemVenda.php';
            require_once BASE . '/Database/Conexao.php';
            $DAOItemVenda = new DAOItemVenda();
            session_start();

            $lista = $DAOItemVenda->listaPorVenda($_SESSION['vendaaberta']);
            $total = 0;
            foreach ($lista as $registro) {

                echo '<tr>';
                echo '<td>' . $registro['iditemVenda'] . '</td>';
                echo '<td>' . $registro['produtoid'] . '</td>';
                echo '<td>' . $registro['quantidade'] . '</td>';
                echo '<td>' . $registro['subtotal'] . '</td>';

                ?>
                <td>
                    <form action="deleteitemvenda.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?= $registro['iditemVenda'] ?>">
                        <button>Excluir</button>
                    </form>
                </td>
                <?php
                echo '</tr>';
                $total += $registro['subtotal'];
            }
            ?>
        </table>
        <br>

        <label>Total =
            <?= 'R$' . sprintf("%.2f", $total) ?>
        </label>
        <br>

        <form action="FecharVenda.php" method="post">
            <br>
            <button>Fechar a venda</button>
        </form>
    </div>

</body>

</html>