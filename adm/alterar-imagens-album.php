<?php 
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

    $arq_img = "arquivo$i";
      
      if(isset($_FILES[$arq_img]) && ($_FILES[$arq_img]['error'] == 0)){
          $img = $_FILES[$arq_img];
          $img = $img['name'];
          $$arq_img = $img;

          $j = $i;
          $idimagem[$i] = $_POST["idimagem".$i];
      } 
    
      if (isset($_POST["descricao$i"])){
        $descr[$i] = $_POST["descricao$i"];
        $descr[$i] = trim($descr[$i]); 
        
        $idimagem[$i] = $_POST["idimagem".$i];
        $idimg = $idimagem[$i];
        $des = $descr[$i];

        $updateDesc = "UPDATE imagem SET descricao='$des' WHERE idimagem = '$idimg'";
        $Result = mysqli_query($lelo, $updateDesc) or die(mysqli_error($lelo));

      } else {
        $descr[$i] = null;
      }
      
    }
    
$diretorio = "arquivos/";

for ($k = 1; $k <= $j; $k++) {
  $arq_img = "arquivo$k";
      
      if ($idimagem[$k] !== NULL){
        $idimg = $idimagem[$k];     
      }
    
      if($$arq_img != Null && $idimg != NULL){
          mysqli_select_db($lelo, $database_lelo);
          $query = "SELECT * FROM imagem WHERE idimagem = $idimg";
          $rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
          $row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
          $rs_arquivo = $row_rs_projeto[$arq_img];
          if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
              unlink($diretorio.$rs_arquivo);
          }

          $nome_arquivo = $_FILES[$arq_img]["name"];
          $nome_arquivo = $diretorio.$nome_arquivo;
          $arquivo_temporario = $_FILES[$arq_img]["tmp_name"];
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
          $image = ${'img'.$k.'_novo'};

          $sql = "UPDATE imagem SET arquivo = '$image' WHERE idimagem = $idimg";
          $Result = mysqli_query($lelo, $sql) or die(mysqli_error($lelo));
  
        } 
  }










