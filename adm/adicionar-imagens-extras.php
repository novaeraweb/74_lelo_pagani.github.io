<?php
require "conecta.php";
$id_noticia = $_POST['id'];
$dir = 'arquivos/';

for ($i = 1; $i <= 10; $i++){
  
    $arq_img = 'arquivo'.$i;
  
    if (isset($_FILES[$arq_img]) && $_FILES[$arq_img]["error"] == 0) {
        $arquivo_teste = $_FILES[$arq_img]; 
        $arquivo_teste = $arquivo_teste['name'];
        
        $$arq_img = $arquivo_teste;
        $j = $i;
    }

   

  }


require "adicionar-imagens-album.php";

header("Location: listar-noticia.php?inserido=true");