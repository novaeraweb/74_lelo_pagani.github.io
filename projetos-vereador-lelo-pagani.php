<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php"; 
$projetos = listaProjeto($lelo);
?>

<html>
	<head>
		<title>Projetos Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Projetos de Lei | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="keywords" content="vereador, lelo pagani, historico, projetos, botucatu, politica, lei" />
    <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
    <meta name="company" content="Vereador Lelo Pagani | Botucatu/SP" />
    <meta name="robots" content="follow,index">
    <meta name= "googlebot" content="follow,index">
    <meta name="DC.publisher" content="Nova Era Web">
    <meta name="DC.date.created" content="2008-10-01">
    <meta name="DC.Identifier" content="https://www.lelopagani.com.br">
    <meta name="DC.date.modified" content="<?php echo date("o"); ?>-<?php echo date("n"); ?>-<?php echo date("j"); ?>">
    <link rel="author" href="https://www.novaeraweb.com.br"/>
    <link rel="canonical" href="https://www.lelopagani.com.br/projetos-vereador-lelo-pagani.php" />

    <!-- Meta FB -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Vereador Lelo Pagani" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/projetos-vereador-lelo-pagani.php"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/assets/images/avatar.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Projetos de Lei | Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:site_name" content="Vereador Lelo Pagani"/>
    <meta property="fb:admins" content=""/>
    <!-- Fim Meta FB -->
    <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:description"
      content="Sobre | Vereador Lelo Pagani - Botucatu/SP"
    />
    <meta name="twitter:title" content="Projetos de Lei | Vereador Lelo Pagani - Botucatu/SP" />
    <meta name="twitter:site" content="@lelopagani" />
    <meta
      name="twitter:image"
      content="https://www.lelopagani.com.br/assets/images/avatar.jpg"
    />
    <meta name="twitter:creator" content="@lelopagani" />
    <!-- Fim Meta Twitter -->

    <link rel="stylesheet" href="assets/css/main.css" />    
    <link rel="stylesheet" href="assets/css/jquery.datatables.css">  
	</head>

<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <section id="one">
          <header class="major">
              <h1>Projetos Vereador Lelo Pagani</h1>
          </header>

          <table class="table" id="tabela">
            <thead>
                <tr>
                  <th>Nº do Projeto</th>
                  <th>Título</th>
                  <th>Data do Projeto</th>
                  <th>Link</th>
                </tr>
            </thead>
          <tbody>
              <?php foreach ($projetos as $projeto){?>
                <tr class="text-center">
                  <td style="max-width:60px;"><?=$projeto->nro_projeto;?></td>
                  <td style="max-width:220px;"><?=$projeto->titulo;?></td>
                    <td style="max-width:60px;"><?=$projeto->data_projeto;?></td>
                    <td><a href="<?=$projeto->link;?>">Leia mais</a></td>
                </tr>
                <?php }?>
            </tbody>
          </table> 





          
        </section>
        <?php require_once "contato-vereador-lelo-pagani.php"?>
    </main>
</body>
<?php require_once "footer.php"?>
<script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>
<script>
  // Tabela
  $(document).ready( function () {
  $('#tabela').DataTable();
  } );
  </script> 
</html>