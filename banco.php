<?php
$server = "localhost";
$db = "3tid";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die('Erro ao conectar ao banco: ' . mysql_error());
  }
?>