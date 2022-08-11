<?php 

include 'banco.php';

date_default_timezone_set('America/Sao_Paulo');

$hoje = date('Y/m/d');

$query = $conn->query("SELECT * FROM tabela1 WHERE dtval <= '$hoje'");
$produtos = $query->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos vencidos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <div class="container"> 
    
  <?php include 'menu.php'; ?>

  
    <div class="formulario">
      
      <h2> Lista de produtos vencidos </h2>

      <div class="tabela">

      <?php if(sizeof($produtos) > 0){
        
      ?>

        <table style="width:100%">
          <tr>
            <th>ID:</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Data de Validade</th>
            <th>Valor</th>
          </tr>
          <?php 
        
            foreach($produtos as $produto):

          ?>
          <tr>
            <td> <?php echo($produto['idcode']); ?></td>
            <td> <?php echo($produto['descricao']); ?></td>
            <td> <?php echo($produto['qtdat']); ?></td>
            <td id="data-vencida"> <?php echo($produto['dtval']); ?></td>
            <td> <?php echo($produto['valor']); ?></td>
          </tr>

          <?php
            endforeach;
          }else{
            echo("<h3> Nenhum produto vencido </h3>");
          }
          ?>
        </table>
      </div>   

    </div>
  </div>


  <script src="./js/script.js"></script>


</body>
</html>

