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
		<link rel="stylesheet" href="assets/css/main.css" />      
	</head>

<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <section id="one">
          <?php foreach ($noticias as $noticia){?>
          <header class="major">
              <h1><?=$noticia->titulo;?></h1>
              <p><input type="date" disabled value="<?=$noticia->data_noticia;?>"></p>
          </header>
          <img src="adm/arquivos/<?=$noticia->arquivo;?>" alt="Notícia Vereador Lelo Pagani" class="image fit">
          <p><?=$noticia->descricao_longa;?></p>
        </section>
        <?php }?>
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