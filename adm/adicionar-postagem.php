<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();
require_once "checkLogin.php";
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $titulo = $_POST["titulo"];
    $titulo = trim($titulo);

    $descricao_breve = $_POST["descricao_breve"];
    $descricao_breve = trim($descricao_breve);

    $descricao_longa = $_POST["descricao_longa"];
    $descricao_longa = trim($descricao_longa);

    $link = $_POST["link"];
    $link = trim($link);

    $data = $_POST['data'];
    $data = trim($data);

    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);

    $ativo = "Sim";

    $video = $_POST['video'];
    $video = trim($video);


    $dir = "arquivos/";
    $dir = strtolower($dir);
    


    $nomevar = 'arquivo';


    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";


$insertSQL = "INSERT INTO blog (titulo, descricao_breve, descricao_longa, link, usuario, data, arquivo, video, ativo) VALUES ('$titulo', '$descricao_breve', '$descricao_longa', '$link', '$usuario', '$data' , '$novo', '$video', '$ativo' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 


header("Location: home.php?inserido=true");
