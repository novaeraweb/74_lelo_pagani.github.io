<!doctype html>
<html lang="en">
<?php session_start();
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php"; 
mysqli_select_db($lelo,$database_lelo);
$projetos = listaProjeto($lelo);
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
  <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.js"></script>
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
                                <h4 class="card-title" style="width:100%;height:100%;">Listar Projetos</h4>
                            </div>
                        </div>
                        <div class="card-body">
                          <p>Projetos cadastrados no sistema</p>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
                    <div class="tab-content text-center">
                        <div class="tab-pane active">
                          <table class="table" id="tabela">
                            <thead style="margin-top: 50px;">
                                <tr class="text-center">
                                    <th>Nro do projeto</th>
                                    <th>Data do projeto</th>
                                    <th>Título</th>
                                    <th>Categoria</th>
                                    <th>Ativo</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                          <tbody>
                              <?php foreach ($projetos as $projeto){?>
                                <tr class="text-center">
                                    <td style="width:16%;"><?=$projeto->nro_projeto;?></td>
                                    <td style="width:16%;"><?=$projeto->data_projeto;?></td>
                                    <td style="width:25%;"><?=$projeto->titulo;?></td>
                                    <td style="width:25%;"><span style="font-size: 0.8em;background-color:#3c6c83;border-radius:10px;padding:4%;color: #f9f9f9;"><?=$projeto->nome_categoria;?></span></td>
                                    <td><?=$projeto->ativo;?></td>
                                    <td class="td-actions text-right">

                                    <a href="editar-projeto.php?id=<?php echo $projeto->idprojeto;?>" class="info" style="margin-top: 10px; margin-right: 10px;">
                                      <button type="button" rel="tooltip" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="Editar conteúdo">
                                            <i class="material-icons">edit</i>
                                      </button>
                                    </a>
                                    

                                    
                                    <button type="button" class="btn btn-danger btn-round" rel="tooltip" style="margin-top: 10px;" data-toggle="modal" data-placement="top" title="Excluir" data-target="#modal-delete-projeto<?php echo $projeto->idprojeto;?>">
                                      <i class="material-icons">close</i>
                                    </button>

                                  <a href="#" class="info"  style="margin-top: 10px; margin-left:10px; margin-right: -75px;"><button type="button" rel="tooltip" class="btn btn-info btn-round" data-toggle="tooltip" data-placement="top" title="Postado por <?=$projeto->usuario;?>, em: <?=$projeto->data;?>">
                                      <i class="material-icons">help</i>
                                  </button></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-delete-projeto<?php echo $projeto->idprojeto;?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete"  aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Apagar projeto</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>Você tem certeza que deseja apagar esta projeto?<br>
                                              <b class="text-center">Esta ação é irreversível</b>.</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <a href="delete-projeto.php?id=<?=$projeto->idprojeto;?>" class="info"><button type="button" class="btn btn-danger">APAGAR</button></a>
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
