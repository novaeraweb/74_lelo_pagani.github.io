<?php session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo, $database_lelo);  

$hora = time();

    $id = $_POST['id'];
    $idimagem = array();

   
	    
    // Continua caso existam fotos para o álbum de fotos
    for ($i = 1; $i <= 10; $i++){
        $img = 'arquivo'.$i;
        if(isset($_FILES[$img]) && ($_FILES[$img]['error'] == 0)){
            $arq_img = $_FILES[$img];
            $arq_img = $arq_img['name'];
            $$arq_img = $arq_img;

            $j = $i;
        }

        for($n = 1; $n <= $j; $n++){
            $des = $_POST['descricao'.$n];
            $descricao = array();
            if ($des != NULL){
                $descricao[$n] = null;
            } else {
                $descricao[$n] = $des;
                $descricao[$n] = trim($descricao[$n]);
            }
        }
        if ($idimagem != NULL){
            $idimagem[$i] = $_POST['idimagem'.$i];
        }
    }

	$diretorio = "arquivos/";
	
	for ($k = 1; $k <= $j; $k++) {
        if($$arq_img != Null){
            $idimg = $idimagem[$k];
            mysqli_select_db($lelo, $database_lelo);
            $query = "SELECT * FROM imagem WHERE idimagem = '$idimg'";
            $rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
            $row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
            $rs_arquivo = $row_rs_projeto[$$arq_img];
            if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
                unlink($diretorio.$rs_arquivo);
            }
    
            $nome_arquivo = $_FILES[$$arq_img]["name"];
            $nome_arquivo = "arquivos/".$nome_arquivo;
            $arquivo_temporario = $_FILES[$$arq_img]["tmp_name"];
            move_uploaded_file($arquivo_temporario, $nome_arquivo);
    
            // Descobre a extensao:
            $ext = pathinfo($$arq_img, PATHINFO_EXTENSION);
            $ponto = ".";
    
            // Gera novo nome
            $novo = 'lelo-pagani-album-'.rand().$ponto.$ext;
            $var = $diretorio.$$arq_img;
            $var_novo = $diretorio.$novo;
    
            rename($var, $var_novo);
        }
        $desc = $descricao[$k];
        $sql = "UPDATE imagem SET arquivo = '$novo', descricao='$desc' WHERE idnoticia='$id' AND idimagem = '$idimg'";
        $Result = mysqli_query($lelo, $sql) or die(mysqli_error($lelo));

    }


header("Location: editar-imagens-noticia.php?id=$id");