<?php include 'banco.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <div class="container"> 

  <?php include 'menu.php'; ?>


    <div class="formulario">
      
      <h2> Cadastrar produtos </h2>
      <form method="POST" action="" enctype="multipart/form-data" target="_self">
         <label for="idcode">Id: </label><br>
         <input type="text" name="idcode" placeholder="código"><br>
         <label for="descricao">Descrição:</label><br>
         <input type="text" name="descricao" placeholder="Tipo Produto"><br>
         <label for="dtval">Validade:</label><br>
         <input type="date" name="dtval" id="dataval" placeholder="dd-mm-yyyy"
        min="1997-01-01" max="2050-12-31""><br>
         <label for="qtdat">Quantidade:</label><br>
         <input type="number" name="qtdat" placeholder="#####"><br>
         <label for="valor">Valor:</label><br>
         <input type="number" min="1" step="any" name="valor" placeholder="$0,00"><br>
         <input type="submit" name="cadastrar" value="Cadastrar"><br><br>
      </form>

    </div>
  </div>


  <script src="./js/script.js"></script>


</body>
</html>

<?php 

if(isset($_POST["cadastrar"])){
  $idcode = $_POST["idcode"];
  $descricao = $_POST["descricao"];
  $dtval = $_POST["dtval"];
  $qtdat = $_POST["qtdat"];
  $valor = $_POST["valor"];

  $sql = "SELECT * FROM tabela1 WHERE $idcode = idcode";
  $sql2 = "INSERT INTO tabela1 (idcode, descricao, dtval, qtdat, valor)
  VALUES ('$idcode', '$descricao', '$dtval', '$qtdat', '$valor')";

  $query = $conn->query($sql);

  if($query->num_rows > 0){
    echo("<script> alert('Já possui esse ID cadastrado!') </script>");
  }else{
    if($conn->query($sql2) === true){
      echo("<script> alert('Cadastrado com sucesso') </script>");
    }else{
      echo("<script> alert('Erro ao cadastrar') </script>");
    }
    
  }

}



?>