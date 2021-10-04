<?php
require "adm/conecta.php";
require "adm/class.php";
require "adm/function.php";

$id = $_GET['id'];
$opinioes = listaOpiniaoId($lelo, $id);
?>
<html>
	<head>
		<title>Editorial Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61487b13b1633800191bae1f&product=inline-share-buttons" async="async"></script>
	</head>

<?php require_once "header.php"?>
<body>
    <main id="main">
    <section id="one">
          <?php foreach ($opinioes as $opiniao){?>
          <header class="major">
              <h1><?=$opiniao->titulo;?></h1>
              <p><?=$opiniao->data;?></p>
          </header>
          <?php if ($opiniao->video){ ?>
            <?php
              $url = $opiniao->video;  
              preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
            ?>
            <!-- RegEx para definir o link do iframe -->
            <iframe src="https://www.youtube.com/embed/<?=$matches[1]?>" width="100%" height="500px" frameborder="0"></iframe>
          <?php } else {?>
            <img src="adm/arquivos/<?=$opiniao->arquivo;?>" alt="Opinião Vereador Lelo Pagani" class="image fit">
          <?php }?>
          <p><?=$opiniao->descricao_longa;?></p>
          <?php if ($opiniao->video){ ?>
            <img src="adm/arquivos/<?=$opiniao->arquivo;?>" alt="Opinião Vereador Lelo Pagani" class="image fit">
          <?php }?>
        </section>
        <?php }?>
        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
        <?php require_once "contato-vereador-lelo-pagani.php"?>
  
    </main>
    
    <?php require_once "footer.php"?>
</body>

<script type="text/javascript" src="assets/js/jquery.cntl.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="assets/css/cntl.min.css">

</html>