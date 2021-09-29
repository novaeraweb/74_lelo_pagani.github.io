<?php
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $id = $_POST["id"];
    $id = trim($id);

    $titulo = $_POST["titulo"];
    $titulo = trim($titulo);

    $descricao_breve = $_POST["descricao_breve"];
    $descricao_breve = trim($descricao_breve);
   
    $descricao_longa = $_POST["descricao_longa"];
    $descricao_longa = trim($descricao_longa);

    $data_postagem = $_POST['data_postagem'];
    $data_postagem = trim($data_postagem);
    
    $link = $_POST["link"];
    $link = trim($link);

    $video = $_POST["video"];
    $video = trim($video);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);

// Insert EN
$updateSQL = "UPDATE blog SET titulo = '$titulo', descricao_breve = '$descricao_breve', descricao_longa = '$descricao_longa', link = '$link', video = '$video', data_postagem = '$data_postagem', ativo = '$ativo' WHERE idblog ='$id'"; 

$Result = mysqli_query($lelo, $updateSQL) or die(mysqli_error($lelo));  

header("Location: home.php?editado=true");