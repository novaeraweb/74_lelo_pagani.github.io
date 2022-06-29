<?php require_once('conecta.php');
  $id = $_GET['id'];

  $query = "SELECT * FROM noticia WHERE idnoticia = '$id'";
  $rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
  $row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
  $rs_arquivo = $row_rs_projeto['arquivo_capa'];
  unlink('arquivos/'.$rs_arquivo);

  $deleteSQL = "UPDATE noticia SET arquivo_capa = '', descricao_capa = '' WHERE idnoticia='$id'";
  $Result = mysqli_query($lelo, $deleteSQL) or die(mysqli_error($lelo));
  header("Location: home.php?excluido=true");