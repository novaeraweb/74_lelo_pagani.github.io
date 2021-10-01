<?php require_once('conecta.php');
  $id = $_GET['id'];
  $deleteSQL = "DELETE FROM perfil WHERE idperfil='$id'";
  $Result = mysqli_query($lelo, $deleteSQL) or die(mysqli_error());
  header("Location: home.php?excluido=true");