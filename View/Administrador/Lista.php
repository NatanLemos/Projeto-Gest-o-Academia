<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Administradores</title>
</head>

<body>
    <h1>Listagem De Administradores</h1>
    <table border="1">
        <tr>
            <th>Usuario</th>
            <th>Senha</th>
            <th>IdFuncionario</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Administrador.php';
        require_once BASE . '/Database/DAOAdministrador.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOAdministrador();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['usuario'] . '</td>';
            echo '<td>' . $registro['senha'] . '</td>';
            echo '<td>' . $registro['idfuncionario'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="idfuncionario" id="idfuncionario" value="<?= $registro['idfuncionario'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="usuario" id="usuario" value="<?= $registro['usuario'] ?>">
                    <input type="hidden" name="senha" id="senha" value="<?= $registro['senha'] ?>">
                    <input type="hidden" name="idfuncionario" id="idfuncionario" value="<?= $registro['idfuncionario'] ?>">

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