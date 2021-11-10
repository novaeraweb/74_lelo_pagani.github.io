<?php session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo, $database_lelo);  

$idimagem = array();
$descr = array();


// Continua caso existam fotos para o álbum de fotos
  for ($i = 1; $i <= 10; $i++){
      
      if(isset($_FILES["arquivo$i"]) && ($_FILES["arquivo$i"]['error'] == 0)){
          $arq_img = $_FILES["arquivo$i"];
          $arq_img = $arq_img['name'];
          $$arq_img = $arq_img;

          $j = $i;
          $idimagem[$i] = $_POST["idimagem$i"];
      } else {
        $idimagem[$i] = NULL;
      }

    
      if (isset($_POST["descricao$i"])){
        $descr[$i] = $_POST["descricao$i"];
        $descr[$i] = trim($descr[$i]); 
    } else {
          $descr[$i] = null;
      }             
  }


$arrayCampos = array();

$diretorio = "arquivos/";

for ($k = 1; $k <= $j; $k++) {
      
      if ($idimagem[$k] !== NULL){
        $idimg = $idimagem[$k];     
      }

    
      if($$arq_img != Null && $idimg != NULL){
          mysqli_select_db($lelo, $database_lelo);
          $query = "SELECT * FROM imagem WHERE idimagem = $idimg";
          $rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
          $row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
          $rs_arquivo = $row_rs_projeto["arquivo$k"];
          if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
              unlink($diretorio.$rs_arquivo);
          }

          $nome_arquivo = $_FILES["arquivo$k"]["name"];
          $nome_arquivo = $diretorio.$nome_arquivo;
          $arquivo_temporario = $_FILES["arquivo$k"]["tmp_name"];
          move_uploaded_file($arquivo_temporario, $nome_arquivo);

          // Descobre a extensao:
          $ext = pathinfo($$arq_img, PATHINFO_EXTENSION);
          $ponto = ".";

          // Gera novo nome
          $novo_img = 'lelo-pagani-album-'.rand().$ponto.$ext;
          $var_img = $diretorio.$$arq_img;
          $var_novo_img = $diretorio.$novo_img;
          
          ${'img'.$k.'_novo'} = $novo_img;
          rename($var_img, $var_novo_img);
        }

      
  }

  for ($m = 1; $m <= $j; $m++){
    
    $desc = $descr[$m];
    $image =  ${'img'.$m.'_novo'};


    if ($idimagem[$m] != NULL){
      $idimg = $idimagem[$m];     
      $sql = "UPDATE imagem SET arquivo = '$image', descricao='$desc' WHERE idimagem = $idimg";
      
      $Result = mysqli_query($lelo, $sql) or die(mysqli_error($lelo));
    }
  
}











