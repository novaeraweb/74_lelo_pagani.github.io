<!doctype html>
<html lang="pt_BR">
<?php session_start(); ?>
<?php require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";

//Popula foreach com o total de conteúdo em cada categoria

// Query para números de categorias (totais)
$query_total = "SELECT a.* FROM projeto a WHERE ativo = 'Sim'";
$resultado_total = mysqli_query($lelo, $query_total);
$projeto_total = mysqli_num_rows($resultado_total);

$query_total = "SELECT a.* FROM noticia a WHERE ativo = 'Sim'";
$resultado_total = mysqli_query($lelo, $query_total);
$noticia_total = mysqli_num_rows($resultado_total);

$projetos = listaProjetoHome($lelo);
$noticias = listaNoticiaHome($lelo);

$total = array_merge($projetos, $noticias);
$contar = count($total);

?>
<head>
  <title>Administração Lelo Pagani</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link rel="stylesheet" href="assets/css/modal.css">
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="assets/css/alerta.css" rel="stylesheet"/>
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
</head> 

<body>
  <div class="wrapper ">
    <?php require_once "sidebar.php"?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once "dashboard.php"?><?php require_once "alerta.php"?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                  <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                      <h4 class="card-title">Notícias<br>Ativas</h4>
                    </div>
                  </div>
                  <div class="card-body" style="text-align: center; font-size: 26px;">
                        <strong><?=$noticia_total; ?></strong>
                  </div>
              </div>
           </div>
            <div class="col-md-3">
              <div class="card">
                  <div class="card-header card-header-text card-header-success">
                    <div class="card-text">
                      <h4 class="card-title">Projetos<br>Ativos</h4>
                    </div>
                  </div>
                  <div class="card-body" style="text-align: center; font-size: 26px;">
                        <strong><?=$projeto_total; ?></strong>
                  </div>
              </div>
           </div>
          </div> 
        </div>
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs bg-dark" style="text-align: center;" data-tabs="tabs">
                        <li class="nav-item col-md-6" style="padding:0">
                            <a class="nav-link active" href="#noticias" data-toggle="tab">Notícias Recentes</a>
                        </li>
                        <li class="nav-item col-md-6" style="padding:0">
                            <a class="nav-link" href="#projetos" data-toggle="tab">Projetos Recentes</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body bg-dark">
              <div class="tab-content text-center">
                <div class="tab-pane active" id="noticias">
                  <table class="table" cellspacing="0" id="tabela_noticias"><br>
                      <thead>
                          <tr class="text-center">
                              <th style="display:none;"></th>
                              <th>Data</th>
                              <th>Capa</th>
                              <th data-order>Título</th>
                              <th>Ativo</th>
                              <th>Ações</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($noticias as $noticia) { ?>
                            <tr class="text-center">
                                <td style="display:none;"><?=$noticia->idnoticia;?></td>    
                                <td><?=$noticia->data;?></td>    
                                <td><img src="arquivos/<?=$noticia->arquivo_capa;?>" style="width: 80px;"></td>
                                <td><?=$noticia->titulo;?></td>
                                <td><?=$noticia->ativo;?></td>
                                <td class="td-actions text-center">
                                <!-- <a href="editar-conteudo.php?id=" class="info"  style="margin-top: 25px;"><button type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="material-icons">edit</i>
                                    </button></a> -->
                                    
                                    <a href="#" class="info"  style="margin-top: 25px;"><button type="button" rel="tooltip" class="btn btn-info btn-round" data-toggle="tooltip" data-placement="top" title="Postado por: <?=$total[$i]->usuario;?>, em <?=$total[$i]->data?>">
                                        <i class="material-icons">help</i>
                                    </button></a>
                                </td>
                            </tr>
                          <?php  }  ?>
                      </tbody>
                  </table> 
                </div>
                <div class="tab-pane" id="projetos">
                  <table class="table" cellspacing="0" id="tabela"><br>

                    <thead>
                        <tr class="text-center">
                          <th>Data</th>
                            <th>Título</th>
                            <th>Ativo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($projetos as $projeto) { ?>
                          <tr class="text-center">
                            <td><?=$projeto->data;?></td>
                              <td><?=$projeto->titulo;?></td>
                              <td><?=$projeto->ativo;?></td>
                              <td class="td-actions text-center">
                              <!-- <a href="editar-conteudo.php?id=" class="info"  style="margin-top: 25px;"><button type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="Editar">
                                      <i class="material-icons">edit</i>
                                  </button></a> -->
                                  
                                  <a href="#" class="info"  style="margin-top: 25px;"><button type="button" rel="tooltip" class="btn btn-info btn-round" data-toggle="tooltip" data-placement="top" title="Postado por: <?=$total[$i]->usuario;?>, em <?=$total[$i]->data?>">
                                      <i class="material-icons">help</i>
                                  </button></a>
                              </td>
                          </tr>
                        <?php  }  ?>
                    </tbody>
                  </table> 
                </div>
              </div>
            </div>
            
  
          </div>
      <?php require_once "footer.php"?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/material-dashboard.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


</body>

</html>