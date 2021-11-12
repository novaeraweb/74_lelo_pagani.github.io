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

    $nro_projeto = $_POST['nro_projeto'];
    $nro_projeto = trim($nro_projeto);

    $data_projeto = $_POST['data_projeto'];
    $data_projeto = trim($data_projeto);

    $data = $_POST['data'];
    $data = trim($data);

    $link = $_POST['link'];
    $link = trim($link);

    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);

    $ativo = "Sim";

    $dir = "arquivos/";
    $dir = strtolower($dir);

    $categoria = $_POST["categoria"];
    $categoria = trim($categoria);


    $nomevar = 'arquivo';

    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";


//Insert inglês
$insertSQL = "INSERT INTO projeto (titulo, nro_projeto, data_projeto, link, usuario, data, arquivo, ativo, categoria) VALUES ('$titulo', '$nro_projeto', '$data_projeto', '$link', '$usuario', '$data' , '$novo', '$ativo', '$idcategoria' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 


header("Location: home.php?inserido=true");
