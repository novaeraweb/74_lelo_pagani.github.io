<!DOCTYPE HTML>
<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";

$noticias = listaNoticiaIndex($lelo);
$blogs = listaBlogIndex($lelo);
?>
<html>
	<head>
		<title>Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Site | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="keywords" content="vereador, lelo pagani, noticia, blog, projetos lei, botucatu" />
    <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
    <meta name="company" content="Vereador Lelo Pagani | Botucatu/SP" />
    <meta name="robots" content="follow,index">
    <meta name= "googlebot" content="follow,index">
    <meta name="DC.publisher" content="Nova Era Web">
    <meta name="DC.date.created" content="2008-10-01">
    <meta name="  DC.Identifier" content="https://www.lelopagani.com.br">
    <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
    <link rel="author" href="https://www.novaeraweb.com.br"/>
    <link rel="canonical" href="https://www.lelopagani.com.br/index.php" />

    <!-- Meta FB -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/index.php>"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/assets/images/avatar.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Site | Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content=""/>
    <!-- Fim Meta FB -->
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:description"
      content="Site | Vereador Lelo Pagani - Botucatu/SP"
    />
    <meta name="twitter:title" content="Site | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="twitter:site" content="@lelopagani" />
    <meta
      name="twitter:image"
      content="https://www.lelopagani.com.br/assets/images/avatar.jpg"
    />
    <meta name="twitter:creator" content="@lelopagani" />
    <!-- Fim Meta Twitter -->

		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php require_once "header.php"?>
		<!-- Main -->
			<main id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h1><span>LELO</span><br>PAGANI<br></h1>
							<p class="vereador">Vereador</p>
							
						</header>
						<p>Sou vereador do município de Botucatu. Estou no meu 4º mandato na Câmara Municipal de Botucatu. Nesses últimos 4 anos me reciclei e me aprimorei. Busco uma articulação junto à população para construirmos uma cidade melhor.</p>
						<p>Minha luta é pela transformação social, da cidade e da região, com transparência, ética e persistência.</p>
						<ul class="actions">
							<li><a href="sobre-vereador-lelo-pagani.php" class="button">Saiba Mais</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>NOTÍCIAS</h2>
						<div class="row">
							<?php foreach ($noticias as $noticia) {?>
								<article class="col-6 col-12-xsmall work-item">
									<a href="noticias-vereador-lelo-pagani.php" class="noticias fit"><img src="adm/arquivos/<?=$noticia->arquivo;?>" alt="Notícias Vereador Lelo Pagani" /></a>
									<h3><?=$noticia->titulo;?></h3>
									<p><input type="date" disabled value="<?=$noticia->data_noticia;?>"></p>
									<br>
									<ul class="actions">
										<li><a href="noticia-vereador-lelo-pagani.php?id=<?=$noticia->idnoticia;?>" class="button">Ler notícia completa</a></li>
									</ul>
								</article>
								<?php } ?>
							</div>
							<ul class="actions">
								<li><a href="noticias-vereador-lelo-pagani.php" class="button">Ver todas as notícias</a></li>
							</ul>
					</section>

				<!-- Three -->
					<section id="three">
						<h2>EDITORIAL</h2>
						<div class="row">
							<?php foreach ($blogs as $blog){?>
							<article class="col-6 col-12-xsmall work-item">
							<a href="blog-vereador-lelo-pagani.php" class="noticias fit"><img src="adm/arquivos/<?=$blog->arquivo;?>" alt="Blog Vereador Lelo Pagani" /></a>
								<h3><?=$blog->titulo;?></h3>
								<p><?=$blog->descricao_breve;?></p>
								<br>
								<ul class="actions">
									<li><a href="postagem-vereador-lelo-pagani.php?id=<?=$blog->idblog;?>" class="button">Leia a postagem completa</a></li>
								</ul>
							</article>
							<?php }?>
						</div>
						<ul class="actions">
							<li><a href="#" class="button">Saiba Mais</a></li>
						</ul>
					</section>
					<?php require_once "contato-vereador-lelo-pagani.php"?>
			</main>
		<?php require_once "footer.php"?>
	</body>
</html>