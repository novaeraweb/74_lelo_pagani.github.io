<!doctype html>
<html lang="en">
<?php session_start();
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php"; 
mysqli_select_db($lelo,$database_lelo);
$noticias = listaNoticia($lelo);

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
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="assets/css/alerta.css" rel="stylesheet" />
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="assets/css/jquery.datatables.css">
  <script type="text/javascript" charset="utf8" src="assets/js/jquery.datatables.js"></script>
</head>

<body>
  <div class="wrapper ">
  <?php require_once "sidebar.php"?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once "dashboard.php"?>
              <!-- your navbar here -->
          
          
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row"><?php require_once "alerta.php";?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title" style="width:100%;height:100%;">Listar Notícias</h4>
                            </div>
                        </div>
                        <div class="card-body">
                          <p>Notícias cadastradas no sistema</p>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="tab-content text-center">
                        <div class="tab-pane active">
                          <table class="table" id="tabela">
                            <thead>
                                <tr class="text-center">
                                    <th>Imagem</th>
                                    <th>Título</th>
                                    <th>Ativo</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                          <tbody>
                              <?php foreach ($noticias as $noticia){?>
                                <tr class="text-center">
                                    <td><img src="arquivos/<?=$noticia->arquivo;?>" style="width: 80px;"></td>
                                    <td style="max-width:100px;"><?=$noticia->titulo;?></td>
                                    <td><?=$noticia->ativo;?></td>
                                    <td class="td-actions text-right">
                                    <a href="editar-imagens-noticia.php?id=<?php echo $noticia->idnoticia;?>" style="margin-top: 10px; margin-right: 10px;">
                                      <button type="button" rel="tooltip" class="btn btn-warning btn-round" data-toggle="tooltip" data-placement="top" title="Editar fotos">
                                        <i class="material-icons">camera_enhance</i>
                                      </button>
                                    </a>

                                    <a href="editar-noticia.php?id=<?php echo $noticia->idnoticia;?>" class="info" style="margin-top: 10px; margin-right: 10px;">
                                      <button type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="Editar conteúdo">
                                            <i class="material-icons">edit</i>
                                      </button>
                                    </a>
                                    
                                    <button type="button" class="btn btn-danger btn-round"  style="margin-top: 10px;" data-toggle="modal" data-target="#modal-delete-noticia<?php echo $noticia->idnoticia;?>" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Excluir">
                                      <i class="material-icons">close</i>
                                    </button>
                                  <a href="#" class="info"  style="margin-top: 10px; margin-left:10px; margin-right: -75px;"><button type="button" rel="tooltip" class="btn btn-info btn-round" data-toggle="tooltip" data-placement="top" title="Postado por <?=$noticia->usuario;?>, em: <?=$noticia->data;?>">
                                      <i class="material-icons">help</i>
                                  </button></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-delete-noticia<?php echo $noticia->idnoticia;?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete"  aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Apagar noticia</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>Você tem certeza que deseja apagar esta noticia?<br>
                                              <b class="text-center">Esta ação é irreversível</b>.</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <a href="delete-noticia.php?id=<?=$noticia->idnoticia;?>" class="info"><button type="button" class="btn btn-danger">APAGAR</button></a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                           </tbody>
                          </table> 
                        </div>
                    </div>
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
  <script src="assets/js/main.js" type="text/javascript"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


</body>

</html>
