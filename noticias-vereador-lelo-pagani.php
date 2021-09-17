<?php
require "adm/conecta.php";
require "adm/class.php";
require "adm/function.php";

$noticias = listaNoticia($lelo);
?>
<html>
	<head>
		<title>Notícias Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />      
	</head>

<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <h1>Notícias Vereador Lelo Pagani</h1>
        <div class="cntl">
            <span class="cntl-bar cntl-center">
                <span class="cntl-bar-fill"></span>
            </span>
            <div class="cntl-states">
                <?php $i = 1; foreach ($noticias as $noticia) {?>  
                <div class="cntl-state">
                    <div class="cntl-content">
                        <h2><?=$noticia->titulo;?></h2>
                        <p><input type="date" disabled value="<?=$noticia->data_noticia;?>"></p>
                        <p><?=substr($noticia->descricao_longa, 0, 200).'...'?></p>
                        <ul class="actions">
							<li><a href="noticia-vereador-lelo-pagani.php?id=<?=$noticia->idnoticia;?>" class="button">Leia a notícia completa</a></li>
						</ul>
                    </div>
                    <div class="cntl-image"><img src="adm/arquivos/<?=$noticia->arquivo;?>" alt="Imoveis no Ninho Verde 2"></div>
                    <div class="cntl-icon"><?=$i;?></div>
                </div>
                <?php $i += 1; } ?>
            </div>
        </div>
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