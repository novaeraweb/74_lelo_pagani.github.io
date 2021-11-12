<?php
require_once "conecta.php";
mysqli_select_db($lelo, 'lelopagani');

    $id = $_POST["id"];
    $id = trim($id);

    $nome = $_POST["nome"];
    $nome = trim($nome);

    $data = $_POST['data'];
    $data = trim($data);
    
    $usuario = $_POST["usuario"];
    $usuario = trim($usuario);

// Insert EN
$updateSQL = "UPDATE categoria SET nome = '$nome', data = '$data' WHERE idcategoria ='$id'"; 

$Result = mysqli_query($lelo, $updateSQL) or die(mysqli_error($lelo));  

header("Location: listar-categoria.php?editado=true");