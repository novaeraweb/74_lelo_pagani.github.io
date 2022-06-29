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

    $linha_fina = $_POST["linha_fina"];
    $linha_fina = trim($linha_fina);

    $descricao_longa = $_POST["descricao_longa"];
    $descricao_longa = trim($descricao_longa);

    $descricao_capa = $_POST["descricao_capa"];
    $descricao_capa = trim($descricao_capa);

    $data = $_POST['data'];
    $data = trim($data);

    $link = $_POST['link'];
    $link = trim($link);

    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);

    $tempo = $_POST["tempo"];
    $tempo = trim($tempo);

    $ativo = "Sim";

    $video = $_POST['video'];
    $video = trim($video);

    $data_noticia = $_POST['data_noticia'];
    $data_noticia = trim($data_noticia);

    $descricao_video = $_POST['descricao_video'];
    $descricao_video = trim($descricao_video);

    $dir = "arquivos/";
    $dir = strtolower($dir);
    
    $nomevar = 'arquivo_capa';


    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste['name'];
        $$nomevar = $arquivo_teste;
    }

    require "adicionar-imagens.php";

//Insert inglês
$insertSQL = "INSERT INTO noticia (titulo, linha_fina, descricao_longa, descricao_capa, link, usuario, tempo, data, data_noticia, arquivo_capa, video, descricao_video, ativo) VALUES ('$titulo', '$linha_fina', '$descricao_longa', '$descricao_capa', '$link', '$usuario', '$tempo', '$data', '$data_noticia', '$novo', '$video', '$descricao_video', '$ativo' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 
$id_noticia = $lelo->insert_id;

for ($i = 1; $i <= 10; $i++){
  
    $arq_img = 'arquivo'.$i;
  
    if (isset($_FILES[$arq_img]) && $_FILES[$arq_img]["error"] == 0) {
        $arquivo_teste = $_FILES[$arq_img]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$arq_img = $arquivo_teste;
        $j = $i;
    }

   

  }


require "adicionar-imagens-album.php";


header("Location: home.php?inserido=true");