<?php require_once('conecta.php');
  $id = $_GET['id'];
  $deleteSQL = "DELETE FROM categoria WHERE idcategoria='$id'";
  $Result = mysqli_query($lelo, $deleteSQL) or die(mysqli_error($lelo));
  header("Location: home.php?excluido=true");
