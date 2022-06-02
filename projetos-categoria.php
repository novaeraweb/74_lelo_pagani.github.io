<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";
$id=$_GET['id'];
$id = mysqli_real_escape_string($lelo, $id);
$projetos = listaProjetoCategoriaId($lelo, $id);
$categorias = listaCategoria($lelo);

$query_cat = "SELECT * FROM categoria WHERE idcategoria=$id ";
$rs_cat = mysqli_query($lelo, $query_cat) or die(mysqli_error($lelo));
$row_rs_cat = mysqli_fetch_assoc($rs_cat);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
		<title>Projetos Vereador Lelo Pagani - Botucatu/SP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <meta name="description" content="Projetos de Lei | <?=$row_rs_cat['nome']?> | Vereador Lelo Pagani - Botucatu/SP" />
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
    <meta property="og:title" content="Projetos Vereador Lelo Pagani - Botucatu/SP" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lelopagani.com.br/projetos-vereador-lelo-pagani.php"/>
    <meta property="og:image" content="https://www.lelopagani.com.br/assets/images/avatar.jpg" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="Projetos de Lei | <?=$row_rs_cat['nome']?> | Vereador Lelo Pagani - Botucatu/SP" />
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
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css">  
	</head>

<?php require_once "header.php"?>
<body class="is-preload">
    <main id="main">
        <section id="one">
          <header class="major">
              <h1>Projetos</h1>
          </header>

          <table class="table" id="tabela" style="width:110%;">
            <thead>
                <tr>
                  <th>Número</th>
                  <th>Data</th>
                  <th>Categoria</th>
                  <th>Título</th>
                  <th>Link</th>
                </tr>
            </thead>
          <tbody>
              <?php foreach ($projetos as $projeto){?>
                <tr class="text-center">
                  <td style="max-width:10px;"><?=$projeto->nro_projeto;?></td>
                    <td style="max-width:40px;"><?=$projeto->data_projeto;?></td>
                    <td><span style="font-size: 0.8em;background-color:#3c6c83;border-radius:10px;padding:4%;color: #f9f9f9;"><a href="projetos-categoria.php?id=<?=$projeto->idcategoria;?>" style="color:#f9f9f9;"><?=$projeto->nome_categoria;?></a></span></td>
                  <td style="max-width:290px;"><?=$projeto->titulo;?></td>
                    <td><a href="<?=$projeto->link;?>" rel="noopener" rel="noreferrer" target="_blank">Veja</a></td>
                </tr>
                <?php }?>
            </tbody>
          </table> 

        </section>
        <section id="two">
            <h2><strong>Projetos por categoria</strong></h2>
            <div class="row nophone" style="margin-top:40px; margin-left: 2%;">
              <?php foreach ($categorias as $categoria) { ?>
                <article class="row col-4" >
                  <span class="tag-categoria"><a href="projetos-categoria.php?id=<?=$categoria->idcategoria;?>" style="color:#f9f9f9;"> <?=$categoria->nome;?></a></span>
                </article>
              <?php } ?>
            </div>
            <div class="row yesphone" style="margin-top:40px;">
              <?php foreach ($categorias as $categoria) { ?>
                <article class="row col-11" style="margin-left:4%;">
                  <span class="tag-categoria"><a href="projetos-categoria.php?id=<?=$categoria->idcategoria;?>" style="color:#f9f9f9;"> <?=$categoria->nome;?></a></span>
                </article>
              <?php } ?>
            </div>
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