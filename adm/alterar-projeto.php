<?php
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $id = $_POST["id"];
    $id = trim($id);

    $titulo = $_POST["titulo"];
    $titulo = trim($titulo);

    $nro_projeto = $_POST["nro_projeto"];
    $nro_projeto = trim($nro_projeto);

    $data_projeto = $_POST['data_projeto'];
    $data_projeto = trim($data_projeto);

    $link = $_POST["link"];
    $link = trim($link);

    $ativo = $_POST["ativo"];
    $ativo = trim($ativo);

    $categoria = $_POST["categoria"];
    $categoria = trim($categoria);

// Insert EN
$updateSQL = "UPDATE projeto SET titulo = '$titulo', nro_projeto = '$nro_projeto', data_projeto = '$data_projeto', link = '$link' , ativo = '$ativo', categoria = '$categoria' WHERE idprojeto ='$id'"; 

$Result = mysqli_query($lelo, $updateSQL) or die(mysqli_error($lelo));  

header("Location: listar-projeto.php?editado=true");