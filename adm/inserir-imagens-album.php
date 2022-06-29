<!doctype html>
<html lang="pt_BR">
<?php session_start(); ?>
<?php require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($lelo,$database_lelo);
$id = $_GET['id'];
$noticias = listaNoticiaId($lelo, $id);
$imagens = listaImagensIdNoticia($lelo, $id);

$query = "SELECT arquivo FROM imagem WHERE idnoticia = '$id'";
$rs_projeto = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
$row_rs_projeto = mysqli_num_rows($rs_projeto);

$query_dois = "SELECT arquivo_capa FROM noticia WHERE idnoticia = '$id'";
$rs = mysqli_query($lelo, $query_dois) or die(mysqli_error($lelo));
$row_rs = mysqli_num_rows($rs);

?>

<head>
  <title>Administração Lelo Pagani</title>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="assets/css/modal.css" rel="stylesheet" />
  <link href="assets/css/loading.css" rel="stylesheet" />
</head>

<body>

<div id="loading">
  <img src="assets/img/loading.svg" alt=""> <br>
  <p>Seus arquivos estão sendo enviados!</p> <br>
  <p>Ao final do processo, você será redirecionado(a) automaticamente</p>
</div>

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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">Adicionar imagens</h4>
                            </div>
                        </div>
                        <?php foreach($noticias as $noticia) {  ?>
                        <div class="card-body">
                                Utilize o formulário abaixo para acrescentar imagens ao álbum:
                                <hr>
                                <label for="nome">Título da postagem: </label><strong> <?=$noticia->titulo;?></strong><br>
                        </div>
                        <?php } ?>

                        <input type="hidden" name="total_fotos" id="total_fotos" value="<?=$row_rs_projeto;?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                  <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="adicionar-imagens-extras.php" style="padding-bottom: 15px;" onsubmit="loading()">
                    <div class="form-group">
                      <?php $i = 1; foreach($noticias as $noticia) {  ?>
                      <input type="hidden" name="id" id="id" value="<?=$noticia->idnoticia;?>">
                      <div class="row">
                        <div class="col-md-6">
                          <p><strong>Imagem atuais: (<?=$row_rs.' de capa e '. + $row_rs_projeto.' de álbum';?>)</strong></p>
                            <img src="arquivos/<?=$noticia->arquivo_capa;?>" alt="" width="30%"  height="180px"/>
                            <?php foreach ($imagens as $imagem){?>                         
                              <img src="arquivos/<?=$imagem->arquivo;?>" alt="" width="30%" height="180px"/>
                            <?php }?>
                        </div>
                      </div>
                    <?php }?>
                    <hr>
                    <br>                      
                  </div>
                  <div class="row">

                    <div id="dvFile">
                    </div><br>
                    

                  </div>         

                  <button type="button" class="btn btn-fab btn-round btn-info" onclick="add_more()" style="margin-top: 30px;" >+</button><span>Adicionar mais imagens</span><br>
                  
                  

                  <input type="hidden" name="" value="<?=$i++;?>">
                  <input type="hidden" name="data" id="data" value="<?php echo date('d/m/Y'); ?>">
                  <input type="hidden" name="enviado" id="enviado" value=<?php echo $_SESSION["usuario_logado"];?>>
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

  <script src="assets/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
  let fotos = document.getElementById("total_fotos").value;
  let int = parseInt(fotos)
  let i = int+1;
    function add_more() {
          if (i <= 10){
          var txt = '<label for="arquivo'+ i + '" style="width: 100%; margin-top: 30px;">Imagem adicional '+i+'</label><input type="file" name="arquivo'+ i + '" id="arquivo'+ i +'"><br>';
          document.querySelector("#dvFile").insertAdjacentHTML('beforeend', txt);
          var dsc = '<label for="descricao" style="width: 100%; margin-top: 30px;">Descrição da imagem '+i+'</label><input type="text" class="form-control" name="descricao'+ i + '" id="descricao'+ i +'">';
          document.querySelector("#dvFile").insertAdjacentHTML('beforeend', dsc);
          i++;
          } else {
            alert("Limite máximo de arquivos atingido!");
          }
      } 
    </script>

  <script>
    function loading(){
     document.getElementById("loading").style.display = "block";
     document.body.style.opacity = "0.5";
     document.getElementById("loading").style.opacity = "1";
     
    }
  </script>

</body>

</html>
