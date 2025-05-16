<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/academia10');
define('HOST', $_SERVER['HTTP_HOST']);
define('FOLDER', 'academia10');
?>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: white;
  }

  .button-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 150px;
  }
  
  .button-container {
    background-color: #333;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #1c1c1c;
    width: 400px;
  }
  
  .button-container h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #fff;
  }
  
  .button-grid button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  .button-grid button:hover {
    background-color: #0056b3;
  }
</style>
<title>Página com Botões</title>
</head>
<body>
  <div class="button-container">
    <h2>Divisões da empresa</h2>
    <div class="button-grid">
      <a href="../View/Cliente/entrada.php"><button>Cliente</button></a>
      <a href="../View/Funcionario/entrada.php"><button>Funcionario</button></a>
      <a href="../View/Administrador/entrada.php"><button>Administrador</button></a>
      <a href="../View/Equipamento/entrada.php"><button>Equipamento</button></a>
      <a href="../View/FichaDeTreino/entrada.php"><button>Ficha de Treino</button></a>
      <a href="../View/Conjunto_Equipamento/entrada.php"><button>Conjunto de Equipamentos</button></a>
      <a href="../View/Modalidade/entrada.php"><button>Modalidade</button></a>
      <a href="../View/Produto/entrada.php"><button>Produto</button></a>
      <a href="../View/Venda/entrada.php"><button>Venda</button></a>
      <a href="../View/Modalidade_info/entrada.php"><button>Informações de Modalidade</button></a>
    </div>
  </div>
</body>

</html>