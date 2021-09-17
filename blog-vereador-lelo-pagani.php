<?php
require "adm/conecta.php";
require "adm/class.php";
require "adm/function.php";

$blogs = listaBlog($lelo);
?>
<html>
	<head>
		<title>Blog Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />      
	</head>

<?php require_once "header.php"?>
<body>
    <main id="main">
        <h1>Blog Vereador Lelo Pagani</h1>
        <div class="cntl">
            <span class="cntl-bar cntl-center">
                <span class="cntl-bar-fill"></span>
            </span>
            <div class="cntl-states">
                <?php foreach ($blogs as $blog) {?>
                <div class="cntl-state">
                    <div class="cntl-content">
                        <h2><?=$blog->titulo;?></h2>
                        <p><?=$blog->descricao_longa;?></p>
                    </div>
                    <div class="cntl-image"><img src="adm/arquivos/<?=$blog->arquivo;?>" alt="Imoveis no Ninho Verde 2"></div>
                    <div class="cntl-icon"><?=$blog->idblog;?></div>
                </div>
                <?php } ?>
            </div>
        </div>
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