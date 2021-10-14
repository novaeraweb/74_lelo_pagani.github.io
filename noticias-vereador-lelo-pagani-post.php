<?php
require "adm/conecta.php";
require "adm/class.php";
require "adm/function.php";

$id = $_GET['id'];
$noticias = listaNoticiaId($lelo, $id);
?>
<html>
	<head>
		<title>Notícia Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Notícia | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="keywords" content="vereador, lelo pagani, noticia" />
    <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
    <meta name="company" content="Vereador Lelo Pagani | Botucatu/SP" />
    <meta name="robots" content="follow,index">
    <meta name= "googlebot" content="follow,index">
    <meta name="DC.publisher" content="Nova Era Web">
    <meta name="DC.date.created" content="2008-10-01">
    <meta name="  DC.Identifier" content="https://www.celinamoraes.com.br">
    <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
    <link rel="author" href="https://www.novaeraweb.com.br"/>
    <link rel="canonical" href="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani-post.php?id=<?=$noticias['idnoticia']?>" />

    <!-- Meta FB -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani-post.php?id=<?=$noticias['idnoticia']?>"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/adm/arquivos/<?=$noticias['arquivo']?>.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Notícia | Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content=""/>
    <!-- Fim Meta FB -->
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:description"
      content="Notícia Vereador Lelo Pagani - Botucatu/SP"
    />
    <meta name="twitter:title" content="<?=$noticias['titulo']?>" />
    <meta name="twitter:site" content="@lelopagani" />
    <meta
      name="twitter:image"
      content="https://www.lelopagani.com.br/adm/arquivos/<?=$noticias['arquivo']?>.jpg"
    />
    <meta name="twitter:creator" content="@lelopagani" />
    <!-- Fim Meta Twitter -->

    <link rel="stylesheet" href="assets/css/main.css" />      
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61487b13b1633800191bae1f&product=inline-share-buttons" async="async"></script>
	</head>
<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <section id="one">
          <?php foreach ($noticias as $noticia){?>
          <header class="major">
              <h1 style="font-size:1.6em;line-height:30px;"><?=$noticia->titulo;?></h1>
              <p><input type="date" disabled value="<?=$noticia->data_noticia;?>"></p>
          </header>
          <?php if ($noticia->video){ ?>
            <?php
              $url = $noticia->video;  
              preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
            ?>
            <!-- RegEx para definir o link do iframe -->
            <iframe src="https://www.youtube.com/embed/<?=$matches[1]?>" width="100%" height="500px" frameborder="0"></iframe>
          <?php } else {?>
          <img src="adm/arquivos/<?=$noticia->arquivo;?>" alt="Notícia Vereador Lelo Pagani" class="image fit">
          <?php }?>
          <p style="margin-top:80px;"><?=$noticia->descricao_longa;?></p>
          <p><a href="<?=$noticia->link;?>" target="_blank" > <?=$noticia->link;?></a></p>


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

<script type="text/javascript" src="assets\js\jquery.cntl.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e){
    $('.cntl').cntl({
    revealbefore: 300,
    anim_class: 'cntl-animate',
    onreveal: function(e){
        console.log(e);
    }
    });
});
</script>
<link rel="stylesheet" type="text/css" href="assets\css\cntl.min.css">

</html>