<?php session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo, $database_lelo);  

    $diretorio = "arquivos/";
    $id = $_POST['id'];    
    $data = $_POST['data'];
    
	
    $nomevar = 'arquivo_capa';
    
    if (isset($_FILES[$nomevar]) && $_FILES[$nomevar]["error"] == 0) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste["name"];
        
        $$nomevar = $arquivo_teste;

        mysqli_select_db($lelo, $database_lelo);
		$query = "SELECT * FROM noticia WHERE idnoticia = $id";
		$rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error());
		$row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
		$rs_arquivo = $row_rs_projeto["arquivo_capa"];
		if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
			unlink($diretorio.$rs_arquivo);
		}

		$nome_arquivo = $_FILES["arquivo_capa"]["name"];
        $nome_arquivo = "arquivos/".$nome_arquivo;
		$arquivo_temporario = $_FILES["arquivo_capa"]["tmp_name"];
		move_uploaded_file($arquivo_temporario, $nome_arquivo);

        // Descobre a extensao:
        $ext = pathinfo($$nomevar, PATHINFO_EXTENSION);
        $ponto = ".";

        // Gera novo nome
        $novo = 'lelo-pagani-'.rand().$ponto.$ext;
        $var = $diretorio.$$nomevar;
        $var_novo = $diretorio.$novo;

        rename($var, $var_novo);

        $descricao = $_POST['descricao_capa'];
        $descricao = trim($descricao);


        $sql = "UPDATE noticia SET arquivo_capa = '$novo', descricao_video = '$descricao', data = '$data' WHERE idnoticia=$id";
        $Result = mysqli_query($lelo, $sql) or die(mysqli_error($lelo));

    
    }
    

    require "alterar-imagens-album.php";

header("Location: editar-imagens-noticia.php?id=$id&editado=true");