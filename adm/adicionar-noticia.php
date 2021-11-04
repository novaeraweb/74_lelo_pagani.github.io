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
$insertSQL = "INSERT INTO noticia (titulo, linha_fina, descricao_longa, descricao_capa, link, usuario, tempo, data, data_noticia, arquivo_capa, video, ativo) VALUES ('$titulo', '$linha_fina', '$descricao_longa', '$descricao_capa', '$link', '$usuario', '$tempo', '$data', '$data_noticia', '$novo', '$video', '$ativo' )";      
$Result = mysqli_query($lelo, $insertSQL ) or die(mysqli_error($lelo)); 
$id_noticia = $lelo->insert_id;

// $descricao = array();
// for($n = 1; $n <= $j; $n++){
//     $des = $_POST['descricao'.$n];
//     if ($des != NULL){
//         $descricao[$n] = null;
//     } else {
//         $descricao[$n] = $des;
//         $descricao[$n] = trim($descricao[$n]);

      
//     }

// }


// require "adicionar-imagens-album.php";




// if ($img1_novo){
// 	for ($k = 1; $k <= $j; $k++){
// 	$dsc = $descricao[$k];
// 	$img = ${'img'.$i.'_novo'};
// 	$insertImg = "INSERT INTO imagem (descricao, arquivo, idnoticia) VALUES ('$dsc', '$img', '$id_noticia')"; 
// 	$result = mysqli_query($lelo, $insertImg) or die(mysqli_error($lelo));
// 	}   
// }



header("Location: home.php?inserido=true");