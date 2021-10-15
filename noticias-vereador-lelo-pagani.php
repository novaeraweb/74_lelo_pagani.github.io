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

    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Notícias | Vereador Lelo Pagani - Botucatu/SP" />
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
    <link rel="canonical" href="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani.php" />

    <!-- Meta FB -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/noticias-vereador-lelo-pagani.php"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/assets/images/avatar.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Notícias | Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content=""/>
    <!-- Fim Meta FB -->
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
    name="twitter:description"
    content="Notícias | Vereador Lelo Pagani - Botucatu/SP"
    />
    <meta name="twitter:title" content="Notícias | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="twitter:site" content="@lelopagani" />
    <meta
    name="twitter:image"
    content="https://www.lelopagani.com.br/assets/images/avatar.jpg"
    />
    <meta name="twitter:creator" content="@lelopagani" />
    <!-- Fim Meta Twitter -->

        <link rel="stylesheet" href="assets/css/main.css" />      
    </head>

<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <h1>Notícias</h1>
        <div class="cntl">
            <span class="cntl-bar cntl-center">
                <span class="cntl-bar-fill"></span>
            </span>
            <div class="cntl-states">
                <?php $i = 1; foreach ($noticias as $noticia) {?>  
                <div class="cntl-state">
                    <div class="cntl-content">
                        <h2><strong><?=$noticia->titulo;?></strong></h2>
                        <p><img src="assets/images/icon-calendar.svg" width="7%"> <input type="date" disabled value="<?=$noticia->data_noticia;?>" style="margin-top: -20px;"></p><hr>
                        <div style="line-height:24px;">
                            <p><?=substr($noticia->descricao_longa, 0, 200).'...'?></p>
                        </div>
                        <ul class="actions">
							<li><a href="noticias-vereador-lelo-pagani-post.php?id=<?=$noticia->idnoticia;?>" class="button">Leia a notícia completa</a></li>
						</ul>
                    </div>
                    <div class="cntl-image"><img src="adm/arquivos/<?=$noticia->arquivo;?>" alt="Vereador Lelo Pagani"></div>
                    <div class="cntl-icon"><?=$i;?></div>
                </div>
                <?php $i += 1; } ?>
            </div>
        </div>
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