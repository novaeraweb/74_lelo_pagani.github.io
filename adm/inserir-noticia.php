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
  <link href="assets/css/loading.css" rel="stylesheet" />
</head>

<body>
<div id="loading">
  <img src="assets/img/loading.svg" alt=""> <br>
  <p>Seus arquivos estão sendo enviados!</p> <br>
  <p>Ao final do processo, você será redirecionado(a) automaticamente</p>
</div>
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
                                <h4 class="card-title" style="width:100%;height:100%;">Cadastrar Notícias</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                Utilize o formulário abaixo para cadastrar novas notícias:
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="adicionar-noticia.php" onsubmit="loading()">
                      <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="linha_fina">Linha Fina: <strong>(Limitada a 230 caracteres)</strong></label><br>
                        <textarea type="text" name="linha_fina" id="linha_fina" class="form-control"></textarea required>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="descricao_longa">Descrição longa:</label><br>
                        <textarea type="text" name="descricao_longa" id="descricao_longa" class="form-control" required></textarea>
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="link" data-toggle="tooltip" data-placement="top" title="Acresce links para fontes externas, como de jornais ou redes sociais.">Link externo:</label>
                        <input type="text" name="link" id="link" class="form-control">
                      </div>
                      <br>

                      <div class="form-group col-3" style="padding-left: 0;">
                        <label for="data_noticia">Data da Notícia:</label><br>
                        <input type="date" name="data_noticia" id="data_noticia" class="form-control"  pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" required>
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="tempo">Tempo de Leitura:</label><br>
                        <input type="text" name="tempo" id="tempo" style="width: 10%;display:inline-block;" class="form-control" maxlength="2" required ><div style="display:inline-block"> minutos</div>
                      </div>
                      <br>

                      <div id="dvFile">
                        <label for="arquivo" style="width: 100%; margin-top: 15px;">Imagem de capa</label>
                        <input type="file" name="arquivo_capa" id="arquivo_capa" required style="margin-bottom:30px">
                        <br>
                        <label for="descricao_capa">Descrição da Imagem de capa:</label><br>
                        <input type="text" name="descricao_capa" id="descricao_capa" style="" class="form-control" required>
                      </div><br>
                      <button type="button" class="btn btn-fab btn-round btn-info" onclick="add_more()" style="margin-top: 30px;" >+</button><span>Adicionar mais imagens</span><br>

                      <br>

                      <div class="form-group">
                        <label for="video">Vídeo (opcional):</label>
                        <input type="text" class="form-control" name="video" id="video" data-toggle="tooltip" data-placement="top" title="Links para vídeos do YouTube/Vimeo/etc">
                      </div><br>
                      <div class="form-group">
                        <label for="descricao_video">Descrição do Vídeo (opcional):</label><br>
                        <textarea name="descricao_video" id="descricao_video" style="" class="form-control" ></textarea>
                      </div>
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

  <!-- Editor de texto -->
  <!-- <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> -->
  <script src="assets/ckeditor/ckeditor.js"></script>
  <script type="text/javascript">

    // Initialize CKEditor
    CKEDITOR.replace('linha_fina',{
      width: "700px",
      height: "200px",
      wordcount: {
        showParagraphs: true,
        showWordCount: true,
        showCharCount: true,
        countSpacesAsChars:true,
        countHTML:false,
        maxWordCount: -1,
        maxCharCount: 230
      }
    });  

    CKEDITOR.replace('descricao_longa',{

      width: "700px",
      height: "200px",
      wordcount: {
        showParagraphs: true,
        showWordCount: true,
        showCharCount: true,
        countSpacesAsChars:true,
        countHTML:false,
        maxWordCount: -1,
        maxCharCount: -1
      }

    });

    CKEDITOR.replace('descricao_video',{

      width: "700px",
      height: "200px",
      wordcount: {
        showParagraphs: true,
        showWordCount: true,
        showCharCount: true,
        countSpacesAsChars:true,
        countHTML:false,
        maxWordCount: -1,
        maxCharCount: -1
      }

    });


  </script>   

  <script type="text/javascript">
    var i = 1;
    function add_more() {
          if (i <= 10){
          var txt = '<label for="arquivo" style="width: 100%; margin-top: 30px;">Imagem adicional '+i+'</label><input type="file" name="arquivo'+ i + '" id="arquivo'+ i +'"><br>';
          document.querySelector("#dvFile").innerHTML += txt;
          var dsc = '<label for="descricao" style="width: 100%; margin-top: 30px;">Descrição da imagem '+i+'</label><input type="text" class="form-control" name="descricao'+ i + '" id="descricao'+ i +'">';
          document.querySelector("#dvFile").innerHTML += dsc;
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