<?php
require "adm/conecta.php";
require "adm/class.php";
require "adm/function.php";
$id = $_GET['id'];
$id = mysqli_real_escape_string($lelo, $id);
$noticias = listaNoticiaId($lelo, $id);
$query_rs_noticia = "SELECT * FROM noticia WHERE idnoticia=$id ";
$query_rs_noticia = mysqli_real_escape_string($lelo, $query_rs_noticia);
$rs_noticia = mysqli_query($lelo, $query_rs_noticia) or die(mysqli_error($lelo));
$row_rs_noticia = mysqli_fetch_assoc($rs_noticia);
$imagens = listaImagensIdNoticia($lelo, $id);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
<title><?=$row_rs_noticia['titulo']?> | Vereador Lelo Pagani - Botucatu/SP</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
<meta name="description" content="<?=strip_tags($row_rs_noticia['linha_fina'])?> | Vereador Lelo Pagani - Botucatu/SP" />
<meta name="keywords" content="vereador, lelo pagani, noticia" />
<meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
<meta name="company" content="Vereador Lelo Pagani | Botucatu/SP" />
<meta name="robots" content="follow,index">
<meta name= "googlebot" content="follow,index">
<meta name="DC.publisher" content="Nova Era Web">
<meta name="DC.date.created" content="2008-10-01">
<meta name="  DC.Identifier" content="https://www.lelopagani.com.br">
<meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
<link rel="author" href="https://www.novaeraweb.com.br"/>
<link rel="canonical" href="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani-post.php?id=<?=$row_rs_noticia['idnoticia']?>" />
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?=$row_rs_noticia['titulo']?> | Vereador Lelo Pagani - Botucatu/SP" />
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani-post.php?id=<?=$row_rs_noticia['idnoticia']?>"/>
<meta property="og:image" content="https://www.lelopagani.com.br/adm/arquivos/<?=$row_rs_noticia['arquivo_capa']?>" />
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="600">
<meta property="og:description" content="<?=strip_tags($row_rs_noticia['linha_fina'])?> | Vereador Lelo Pagani - Botucatu/SP" />
<meta property="og:site_name" content="Vereador Lelo Pagani"/>
<meta property="fb:admins" content="544530930"/>
<!-- Fim Meta FB -->
<!-- Meta Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Notícia Vereador Lelo Pagani - Botucatu/SP"/>
<meta name="twitter:title" content="<?=$row_rs_noticia['titulo']?>" />
<meta name="twitter:site" content="@lelopagani" />
<meta
name="twitter:image"
content="https://www.lelopagani.com.br/adm/arquivos/<?=$row_rs_noticia['arquivo_capa']?>"
/>
<meta name="twitter:creator" content="@lelopagani" />
<!-- Fim Meta Twitter -->

<link rel="stylesheet" href="assets/css/main.css" />      
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61487b13b1633800191bae1f&product=inline-share-buttons" async="async"></script>
<link href="assets/css/lightbox.min.css" rel="stylesheet" />
<?php require_once "tags.php" ?>
</head>
<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <section id="one">
          <?php foreach ($noticias as $noticia){?>
          <header class="major">
              <h1 style="font-size:1.6em;line-height:30px;"><?=$noticia->titulo;?></h1>
                        <div style="display:inline-block;">
                            <img src="assets/images/icon-calendar.svg" width="24" height="18" style="padding-right: 5px;"><input type="date" disabled value="<?=$noticia->data_noticia;?>">
                        </div>
                        <div style="display:inline-block;margin-left: 20px;">
                            <img src="assets/images/icon-tempo.svg" width="22" height="" style="padding-right: 5px;"><?=$noticia->tempo;?> min. de leitura
                        </div>
          </header>
          <?php if ($noticia->video){ ?>
            <?php
              $url = $noticia->video;  
              preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
            ?>
            <!-- RegEx para definir o link do iframe -->
            <iframe src="https://www.youtube.com/embed/<?=$matches[1]?>" width="100%" height="500px" frameborder="0" style="margin-top: 50px;"></iframe>
            <br>
            <span class="linha-fina"><?=$noticia->descricao_video;?></span>
          <?php } else {?>
          <img src="adm/arquivos/<?=$noticia->arquivo_capa;?>" alt="Notícia Vereador Lelo Pagani" class="image fit" style="margin-top: 50px;">
          <span class="linha-fina"><?=$noticia->descricao_capa;?></span>
          <?php }?>
          <p style="margin-top:80px;"><?=$noticia->descricao_longa;?></p>
          <p><a href="<?=$noticia->link;?>" target="_blank" ><?=$noticia->link;?></a></p>
     
          <div class="row">
            <?php foreach ($imagens as $imagem){?>
              <?php if ($imagem->arquivo){?>
                <article class="col-3 album">
                  <a href="adm/arquivos/<?=$imagem->arquivo;?>" data-lightbox="album" data-title="<?=$imagem->descricao;?>"><img src="adm/arquivos/<?=$imagem->arquivo;?>" alt=""></a>
                </article>
            <?php } ?>
          <?php } ?>
          </div>  
        </section>
        <?php }?>
        <section id="one" style="text-align: center;">
          <h3 style="padding-bottom:30px;">Gostou do Conteúdo? Compartilhe!</h3>
        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
         </section>
        <?php require_once "contato-vereador-lelo-pagani.php"?>
    </main>
</body>
<?php require_once "footer.php"?>
<script>
    lightbox.option({
      'albumLabel': "Imagem %1 de %2"
    })
</script>
</html>