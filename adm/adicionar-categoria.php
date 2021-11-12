<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "checkLogin.php";
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $nome = $_POST["nome"];
    $nome = trim($nome);

    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);
    
    $data = $_POST['data'];
    $data = trim($data);

   

$insertSQL = "INSERT INTO categoria (nome, data, usuario) VALUES ('$nome', '$data', '$usuario' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 


header("Location: inserir-categoria.php?inserido=true");