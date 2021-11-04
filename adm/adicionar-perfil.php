<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "checkLogin.php";
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);

    $data = $_POST['data'];
    $data = trim($data);

    $ativo = "Sim";

    $dir = "arquivos/";
    $dir = strtolower($dir);
  
    $nomevar = 'arquivo';


    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";


//Insert inglês
$insertSQL = "INSERT INTO perfil (usuario, data, arquivo, ativo) VALUES ('$usuario', '$data', '$novo', '$ativo' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 


header("Location: home.php?inserido=true");
