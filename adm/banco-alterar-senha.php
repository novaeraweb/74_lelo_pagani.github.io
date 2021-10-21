<?php
session_start();
require_once "conecta.php";
mysqli_select_db($lelo, $database_lelo);

$user_id = $_SESSION["user_id"];
$senha = $_SESSION['user_senha'];

$senhaAtual = $_POST['senhaatual'];
$senhaAtual = md5($senhaAtual);

$novasenha = $_POST['novasenha'];
$senhaMd5 = md5($novasenha);

if ($senhaAtual === $senha){
    $query = "UPDATE usuario SET senha = '$senhaMd5' WHERE idusuario='$user_id'";
    $resultado = mysqli_query($lelo, $query) or die(mysqli_error($lelo)); 

    $_SESSION["user_senha"] = $senhaMd5;
}  else {
    echo "Senha atual incorreta";
}

	

header("Location: home.php?alterado=true");