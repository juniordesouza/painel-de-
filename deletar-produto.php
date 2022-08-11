<?php include 'banco.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Produto</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <div class="container"> 
    
  <?php include 'menu.php'; ?>


    <div class="formulario">
      
      <h2> Deletar produto </h2>

      <div class="search-form">

        <form method="get" action="">
          <div class="campo-busca">
          <label for="search">Buscar ID:
          <input type="text" name="search" class="search-box">
          </div>
          <input type="submit" name="buscarId" value="Buscar">

        </form>

      </div>

      <div class="tabela">

      <table style="width:100%">
        <tr>
            <th>ID:</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Data de Validade</th>
            <th>Valor</th>
        </tr>
        

      <?php 

      if(isset($_GET['buscarId'])){
        $idcode = $_GET['search'];
        $sql1 = "SELECT * FROM tabela1 WHERE idcode = '$idcode'";
        $query = $conn->query($sql1);
        $produtos = $query->fetch_all(MYSQLI_ASSOC);
      
        if(sizeof($produtos) > 0){
      
          foreach($produtos as $produto):

      ?>
          <tr>
            <td> <?php echo($produto['idcode']); ?></td>
            <td> <?php echo($produto['descricao']); ?></td>
            <td> <?php echo($produto['qtdat']); ?></td>
            <td id="data-vencida"> <?php echo($produto['dtval']); ?></td>
            <td> <?php echo($produto['valor']); ?></td>
          </tr>
          </table>
      <?php
          endforeach;
      ?>

        <form method="POST" id="formulario-valor">
              <input type="submit" name="deletar" value="Deletar">
        </form>

      <?php 
        if(isset($_POST['deletar'])){

          $sql2 = "DELETE FROM `tabela1` WHERE idcode = '$idcode'";

          if($query2 = $conn->query($sql2) == true){
            echo("<script>alert('Deletado com sucesso!')</script>");
          }
          
        }
      }
      }else{
            echo("<h3> Busque um produto pelo ID! </h3>");
          }

        
    
      ?>

      </div>
        
    </div>

  </div>


  <script src="./js/script.js"></script>

</body>
</html>
