<?php
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $id = $_POST["id"];
    $id = trim($id);

    $titulo = $_POST["titulo"];
    $titulo = trim($titulo);

    $linha_fina = $_POST["linha_fina"];
    $linha_fina = trim($linha_fina);
   
    $descricao_longa = $_POST["descricao_longa"];
    $descricao_longa = trim($descricao_longa);
   
    $descricao_video = $_POST["descricao_video"];
    $descricao_video = trim($descricao_video);

    $data = $_POST['data'];
    $data = trim($data);
    
    $data_noticia = $_POST['data_noticia'];
    $data_noticia = trim($data_noticia);

    $link = $_POST["link"];
    $link = trim($link);

    $video = $_POST["video"];
    $video = trim($video);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);

// Insert EN
$updateSQL = "UPDATE noticia SET titulo = '$titulo', linha_fina = '$linha_fina', descricao_longa = '$descricao_longa', link = '$link', video = '$video', descricao_video = '$descricao_video', data_noticia = '$data_noticia', ativo = '$ativo' WHERE idnoticia ='$id'"; 

$Result = mysqli_query($lelo, $updateSQL) or die(mysqli_error($lelo));  

header("Location: listar-noticia.php?editado=true");