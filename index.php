<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";
$noticias = listaNoticiaHome($lelo);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
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
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/index.php"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/assets/images/avatar.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content="544530930"/>
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
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<?php require_once "tags.php" ?>
	</head>
	<body class="is-preload"><?php require_once "alerta.php" ?>
		<?php require_once "header.php"?>
		<!-- Main -->
			<main id="main">
								<!-- One -->
					<section id="one">
						<header class="major">
							<h1><span>LELO</span><br>PAGANI<br></h1>
							<div id="btn-seguir">
								<p class="vereador">Vereador</p>
								<span class="nophone seguir-desktop"><a href="https://www.instagram.com/lelopagani/" target="_blank">Seguir</a></span>
							</div>
							<span class="yesphone seguir-mobile"><a href="https://www.instagram.com/lelopagani/" target="_blank">Seguir</a></span>
						</header>
						<p>Sou vereador do município de Botucatu. Estou no meu 4º mandato na Câmara Municipal de Botucatu. Nesses últimos 4 anos me reciclei e me aprimorei. Busco uma articulação junto à população para construirmos uma cidade melhor.</p>
						<p>Minha luta é pela transformação social, da cidade e da região, com transparência, ética e persistência.</p>
						<ul class="actions">
							<li><a href="sobre-vereador-lelo-pagani.php" class="button">Saiba Mais</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h2><strong>NOTÍCIAS</strong></h2>
						<div class="row">
							<?php foreach ($noticias as $noticia) {?>
								<article class="col-6 col-12-xsmall work-item">
									<a href="noticias-vereador-lelo-pagani-post.php?id=<?=$noticia->idnoticia;?>" class="noticias fit"><img src="adm/arquivos/<?=$noticia->arquivo_capa;?>" alt="Notícias Vereador Lelo Pagani" />
									<p style="color:red;"><strong><input type="date" disabled value="<?=$noticia->data_noticia;?>"></strong></p>
									<h3><?=$noticia->titulo;?>.</h3></a>
									<br>
								</article>
								<?php } ?>
							</div>
							<ul class="actions">
								<li><a href="noticias-vereador-lelo-pagani.php" class="button">Ver todas as notícias</a></li>
							</ul>
					</section>

					<section id="three">
						<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/5747af99462650a9ab7c124ec40bd033.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
					</section>
					<?php require_once "contato-vereador-lelo-pagani.php"?>
			</main>
		<?php require_once "footer.php"?>
	</body>
</html>
