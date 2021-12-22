<?php require_once('conecta.php');
  $id = $_GET['id'];
  $idimg = $_GET['idimg'];

  $query = "SELECT * FROM imagem WHERE idnoticia = '$id'";
  $rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
  $row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
  $rs_arquivo = $row_rs_projeto['arquivo'];
  unlink('arquivos/'.$rs_arquivo);

  $deleteSQL = "DELETE FROM imagem WHERE idimagem = '$idimg'";
  $Result = mysqli_query($lelo, $deleteSQL) or die(mysqli_error());
  header("Location: home.php?excluido=true");