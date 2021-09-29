<!doctype html>
<html lang="pt_BR">
<?php session_start(); ?>
<?php require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo, "lelopagani");
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
</head>

<body>
  <div class="wrapper ">
    <?php require_once "sidebar.php" ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once "dashboard.php"?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
            <div class="row"><?php require_once "alerta.php"?>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title" style="width:100%;height:100%;">Cadastrar Projetos</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                Utilize o formulário abaixo para cadastrar novos Projetos:
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="adicionar-projeto.php">
                      <div class="form-group">
                        <label for="titulo"><strong>Título:</strong></label><br>
                        <input type="text" name="titulo" id="titulo" class="form-control">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="nro_projeto"><strong>Número do Projeto:</strong></label><br>
                        <input type="text" name="nro_projeto" id="nro_projeto" class="form-control">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="data_projeto"><strong>Data do Projeto:</strong></label><br>
                        <textarea type="text" name="data_projeto" id="data_projeto" class="form-control"></textarea>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="link" data-toggle="tooltip" data-placement="top" title="Acrescente links para fontes externas, como de jornais ou redes sociais."><strong>Link externo:</strong></label><br>
                        <input type="text" name="link" id="link" class="form-control">
                      </div>
                      <br>
                      <br>
                      <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuario_logado']?>">
                      <input type="hidden" name="data" id="data" value="<?php echo date('d/m/Y')?>">
                      <button id="submit" type="submit" class="btn btn-info float-right">SALVAR</button>
                    </form> 
                </div>
            </div>
          </div> 
        </div>
      </div>
      <?php require_once "footer.php"?>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/material-dashboard.js" type="text/javascript"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script> 

</body>

</html>