<?php session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo, $database_lelo);  


    $id = $_POST['id'];
    $hora = $_POST['hora'];
    $data = $_POST['data'];
    $usuario = $_POST['usuario'];
	
    $nomevar = 'arquivo';
    
    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste["name"];
        
        $$nomevar = $arquivo_teste;
    }



	$diretorio = "arquivos/";
	
	if($$nomevar != Null){
	   
		mysqli_select_db($lelo, $database_lelo);
		$query = "SELECT * FROM perfil WHERE idperfil = $id";
		$rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error());
		$row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
		$rs_arquivo = $row_rs_projeto["arquivo"];
		if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
			unlink($diretorio.$rs_arquivo);
		}

		$nome_arquivo = $_FILES["arquivo"]["name"];
        $nome_arquivo = "arquivos/".$nome_arquivo;
		$arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
		move_uploaded_file($arquivo_temporario, $nome_arquivo);

        // Descobre a extensao:
        $ext = pathinfo($$nomevar, PATHINFO_EXTENSION);
        $ponto = ".";

        // Gera novo nome
        $novo = 'lelo-pagani-'.rand().$ponto.$ext;
        $var = $diretorio.$$nomevar;
        $var_novo = $diretorio.$novo;

        rename($var, $var_novo);
    }

    $sql = "UPDATE perfil SET arquivo = '$novo', data = '$data', hora = '$hora', usuario = '$usuario' WHERE idperfil=$id";
    $Result = mysqli_query($lelo, $sql) or die(mysqli_error($lelo));


header("Location: editar-imagens-perfil.php?id=$id");