<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Modalidades</title>
</head>
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #1c1c1c;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid white;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #333;
        }

        tr:nth-child(odd) {
            background-color: #1c1c1c;
        }

        form {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            padding: 5px 10px;
            background-color: #333;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #444;
        }
    </style>
<body>

    <table border="1">
        <tr>
            <th>IdModalidade</th>
            <th>NomeDaModalidade</th>
            <th>Tipo</th>
            <th>QTDdias</th>
            <th>NmrAlunos</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');

        require_once BASE . '/Model/Modalidade.php';
        require_once BASE . '/Database/DAOModalidade.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOModalidade();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['IdModalidade'] . '</td>';
            echo '<td>' . $registro['NomeDaModalidade'] . '</td>';
            echo '<td>' . $registro['Tipo'] . '</td>';
            echo '<td>' . $registro['QTDdias'] . '</td>';
            echo '<td>' . $registro['NmrAlunos'] . '</td>';
            ?>
            <td>
                <form action="Delete.php" method="post">
                    <input type="hidden" name="IdModalidade" id="IdModalidade" value="<?= $registro['IdModalidade'] ?>">
                    <button>Excluir</button>
                </form>
            </td>

            <td>
                <form action="FormAltera.php" method="post">
                    <input type="hidden" name="IdModalidade" id="IdModalidade" value="<?= $registro['IdModalidade'] ?>">
                    <input type="hidden" name="NomeDaModalidade" id="NomeDaModalidade"
                        value="<?= $registro['NomeDaModalidade'] ?>">
                    <input type="hidden" name="Tipo" id="Tipo" value="<?= $registro['Tipo'] ?>">
                    <input type="hidden" name="QTDdias" id="QTDdias" value="<?= $registro['QTDdias'] ?>">
                    <input type="hidden" name="NmrAlunos" id="NmrAlunos" value="<?= $registro['NmrAlunos'] ?>">

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