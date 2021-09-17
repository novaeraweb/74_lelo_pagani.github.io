<!DOCTYPE HTML>
<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";

$noticias = listaNoticiaIndex($lelo);
?>
<html>
	<head>
		<title>Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php require_once "header.php"?>
		<!-- Main -->
			<main id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h1>Opa,<br />
								Lelo Pagani.
							</h1>
						</header>
						<p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque cubilia.</p>
						<ul class="actions">
							<li><a href="#" class="button">Saiba Mais</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>Notícias</h2>
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
						<h2>Blog</h2>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="assets/images/fulls/03.jpg" class="image fit thumb"><img src="assets/images/thumbs/03.jpg" alt="" /></a>
								<h3>Tortor metus commodo</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="/assets/images/fulls/04.jpg" class="image fit thumb"><img src="assets/images/thumbs/04.jpg" alt="" /></a>
								<h3>Quam neque phasellus</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="assets/images/fulls/05.jpg" class="image fit thumb"><img src="assets/images/thumbs/05.jpg" alt="" /></a>
								<h3>Nunc enim commodo aliquet</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="assets/images/fulls/06.jpg" class="image fit thumb"><img src="assets/images/thumbs/06.jpg" alt="" /></a>
								<h3>Risus ornare lacinia</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
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