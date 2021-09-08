<?php
session_start();
require_once "conecta.php";
mysqli_select_db($soller, $database_omics);

$user_id = $_POST["user_id"];
$senhaAtual = $_POST['senhaatual'];
$senhaAtual = md5($senhaAtual);
$novasenha = $_POST['novasenha'];
$senha = $_POST['senha'];
$senhaMd5 = md5($novasenha);


if ($senhaAtual == $senha){
    $query = "UPDATE usuario SET senha = '$senhaMd5' WHERE id='$user_id'";
    $resultado = mysqli_query($soller, $query) or die(mysqli_error($soller));  
    // $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION["user_senha"] = $senhaMd5;
}  else {
    echo "Senha atual incorreta";
}

	

header("Location: home.php?alterado=true");