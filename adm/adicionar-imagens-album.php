<?php


 for ($i = 1; $i <= $j; $i++){
  if($arq_img != null)
  {
        switch($_FILES[$arq_img]['type']):
            case 'image/jpeg';
            case 'image/pjpeg';
        
                $imagem_temporaria = imagecreatefromjpeg($_FILES[$arq_img]['tmp_name']);
                
                $largura_original = imagesx($imagem_temporaria);
                
                $altura_original = imagesy($imagem_temporaria);

                $ratio_orig = $largura_original/$altura_original;

                $largura = 2000;
                $altura = 2000;

                if ($largura/$altura > $ratio_orig) {
                  $largura = $altura*$ratio_orig;
                } else {
                  $altura = $largura/$ratio_orig;
                }
                
                $nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
                
                $nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
                
                $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
                imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
                
                imagejpeg($imagem_redimensionada, 'arquivos/' . $_FILES[$arq_img]['name']);
              

            $nome_arquivo = $imagem_redimensionada;
            $arquivo_temporario = $_FILES[$arq_img]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");
                
                
            break;
            
            //Caso a imagem seja extensão PNG cai nesse CASE
            case 'image/png':
            case 'image/x-png';
                $imagem_temporaria = imagecreatefrompng($_FILES[$arq_img]['tmp_name']);
                
                $largura_original = imagesx($imagem_temporaria);
                $altura_original = imagesy($imagem_temporaria);

                $ratio_orig = $largura_original/$altura_original;

                $largura = 2000;
                $altura = 2000;

                if ($largura/$altura > $ratio_orig) {
                  $largura = $altura*$ratio_orig;
                } else {
                  $altura = $largura/$ratio_orig;
                }
                
                /* Configura a nova largura */
                $nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);

                /* Configura a nova altura */
                $nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);
                
                /* Retorna a nova imagem criada */
                $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
                
                /* Copia a nova imagem da imagem antiga com o tamanho correto */
                //imagealphablending($imagem_redimensionada, false);
                //imagesavealpha($imagem_redimensionada, true);

                imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
                
                //função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
                imagepng($imagem_redimensionada, 'arquivos/' . $_FILES[$arq_img]['name']);
                
            $nome_arquivo = $imagem_redimensionada;
            $arquivo_temporario = $_FILES[$arq_img]["tmp_name"];
            move_uploaded_file($arquivo_temporario, "$nome_arquivo");

                
            break;
        endswitch;
        
        
        // Descobre a extensao:
        $ext = pathinfo($$arq_img, PATHINFO_EXTENSION);
        $ponto = ".";
        // Gera novo nome
        $novo_img = 'lelo-pagani-album-'.rand().$ponto.$ext;
        $img_var = $dir.$$arq_img;
        $img_var_novo = $dir.$novo_img;

        ${'img'.$i.'_novo'} = $novo_img;
        rename($img_var, $img_var_novo);
  }
 }