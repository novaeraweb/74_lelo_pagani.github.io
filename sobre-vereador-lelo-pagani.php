<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";
$noticias = listaNoticiaIndex($lelo);
$blogs = listaBlogIndex($lelo);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
		<title>Sobre Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Sobre | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="keywords" content="vereador, lelo pagani, historico, sobre, botucatu, politica" />
    <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
    <meta name="company" content="Vereador Lelo Pagani | Botucatu/SP" />
    <meta name="robots" content="follow,index">
    <meta name= "googlebot" content="follow,index">
    <meta name="DC.publisher" content="Nova Era Web">
    <meta name="DC.date.created" content="2008-10-01">
    <meta name="  DC.Identifier" content="https://www.lelopagani.com.br">
    <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
    <link rel="author" href="https://www.novaeraweb.com.br"/>
    <link rel="canonical" href="https://www.lelopagani.com.br/sobre-vereador-lelo-pagani.php" />

    <!-- Meta FB -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/sobre-vereador-lelo-pagani.php"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/adm/arquivos/<?=$noticias['arquivo']?>.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Sobre | Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content=""/>
    <!-- Fim Meta FB -->
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:description"
      content="Sobre | Vereador Lelo Pagani - Botucatu/SP"
    />
    <meta name="twitter:title" content="Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="twitter:site" content="@lelopagani" />
    <meta
      name="twitter:image"
      content="https://www.lelopagani.com.br/assets/images/avatar.jpg"
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
          <header class="major">
              <h1>Vereador Lelo Pagani</h1>
          </header>
          <p>Sou vereador do município de Botucatu. Estou no meu 4º mandato na Câmara Municipal de Botucatu. Nesses últimos 4 anos me reciclei e me aprimorei. Busco articulação com a população para construirmos uma cidade cada vez melhor. </p>
          <!-- <img src="" alt="Sobre Vereador Lelo Pagani" class="image fit"> -->
          <p>Busco uma articulação junto à população para construirmos uma cidade melhor. Minha luta é pela transformação social, da cidade e da região, com transparência, ética e persistência. Acredito que a educação é o caminho eficaz para a consolidação dessa mudança, respeitando a pluralidade e o meio ambiente. Por isso busco alternativas sustentáveis para o lazer de jovens, adultos e idosos, como também, na geração de emprego e renda.</p>
          <p>Gosto de praticar esportes, participei quatro vezes da corrida de "São Silvestre" e vejo o esporte como modo natural de inclusão e socialização, além da manutenção da saúde física, mental e espiritual.
          Nasci em Botucatu, sou casado, tenho duas filhas. Trabalho há 33 anos no Hospital das Clínicas da Faculdade de Medicina da UNESP - Campus de Botucatu, onde atuo como Analista de Informática na CCIRAS - Controle de Infecção Relacionada à Assistência em Saúde.</p>
          <p>Sou membro da Congregação da Faculdade de Medicina, do CADE - Conselho de Administração e Desenvolvimento da Reitoria da Unesp. Atuo também em grupos sociais como a Associação Brasil Itália, como vice-presidente.</p>
          <p>Sou especialista em Administração Hospitalar pela Faculdade de Medicina da UNESP de Botucatu e Fundação Getúlio Vargas; em Gestão Ambiental e Desenvolvimento Sustentável; e em Administração Pública e Gerência de Cidades pela UNINTER de Curitiba. Sou graduado em Processamento de Dados pela UNESP de Bauru e Técnico em Eletrotécnica pelo Colégio Técnico Industrial de Botucatu.</p>
        </section>
        <?php require_once "contato-vereador-lelo-pagani.php"?>
    </main>
</body>
<?php require_once "footer.php"?>

</html>