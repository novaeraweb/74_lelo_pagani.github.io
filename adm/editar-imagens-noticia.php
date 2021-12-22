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
                                <h4 class="card-title">Editar imagens</h4>
                            </div>
                        </div>
                        <?php foreach($noticias as $noticia) {  ?>
                        <div class="card-body">
                                Utilize o formulário abaixo para editar as imagens do conteúdo:
                                <hr>
                                <label for="nome">Título da postagem: </label><strong> <?=$noticia->titulo;?></strong><br>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                  <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="alterar-imagens-noticia.php" style="padding-bottom: 15px;" onsubmit="loading()">
                    <div class="form-group">
                      <?php $i = 1; foreach($noticias as $noticia) {  ?>
                      <input type="hidden" name="id" id="id" value="<?=$noticia->idnoticia;?>">
                      <div class="row">
                        <div class="col-md-6">
                          <p><strong>Imagem de Capa</strong></p>
                          <?php if ($noticia->arquivo_capa == Null) {  ?>
                            <img src="arquivos/sem-imagem.png" alt="" width="100" height="100" />   
                            <div class="row" style="margin-left: 0; justify-content: center">
                              <button type="button" class="btn btn-warning col-md-6" style="margin-bottom: 0;">
                                <label for="arquivo_capa">Selecione a nova imagem</label>
                                <input type="file" name="arquivo_capa" id="arquivo_capa"/>
                              </button>
                              
                              <button type="button" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#modal-delete-foto-capa<?php echo $noticia->idnoticia;?>" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Excluir">
                              Excluir
                            </button>
                            </div>
                          <?php } else { ?>
                            <img src="arquivos/<?=$noticia->arquivo_capa;?>" alt="" width="88%" style="margin-bottom:20px;"/>
                            <div class="row" style="margin-left: 0; justify-content: center">
                            <button type="button" class="btn btn-warning col-md-6" style="margin-bottom: 0;">
                              <label for="arquivo_capa">Selecione a nova imagem</label>
                              <input type="file" name="arquivo_capa" id="arquivo_capa"/>
                            </button>
                            <button type="button" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#modal-delete-foto-capa<?php echo $noticia->idnoticia;?>" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Excluir">
                            Excluir
                            </button>
                            </div>
                        </div>
                        <div class="col-md-5">
                          <p>Legenda de Capa</p>
                          <textarea type="text" class="form-control col-md-6" name="descricao_capa" id="descricao_capa"> <?=$noticia->descricao_capa?></textarea>
                        </div>
                         


                        <div class="modal fade" id="modal-delete-foto-capa<?php echo $noticia->idnoticia;?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete"  aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apagar foto de capa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Você tem certeza que deseja apagar esta foto?<br>
                                    <b class="text-center">Esta ação é irreversível</b>.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <a href="delete-foto-capa.php?id=<?=$noticia->idnoticia;?>" class="info"><button type="button" class="btn btn-danger">APAGAR</button></a>
                                </div>
                              </div>
                          </div>
                      </div>
                        <?php } ?>
                      </div>
                    <?php }?>
                    <hr>
                    <br>
                    
                    <?php foreach ($imagens as $imagem){?>
                    <input type="hidden" name="idimagem<?=$i;?>" id="idimagem<?=$i;?>" value="<?=$imagem->idimagem;?>">
                   <div class="row">
                    <div class="col-md-6">
                      <p>Foto <?=$i;?> do álbum</p>
                      <?php if ($imagem->arquivo == Null) {  ?>
                        <img src="arquivos/sem-imagem.png" alt="" width="100" height="100" /> 
                        <div class="row" style="margin-left: 0; justify-content: center;">
                          <button type="button" class="btn btn-warning col-md-6" style="margin-bottom: 0;">
                            <label for="arquivo<?=$i;?>">Selecione a nova imagem</label>
                            <input type="file" class="form-control" name="arquivo<?=$i;?>" id="arquivo<?=$i;?>"/>
                          </button>    
                          <button type="button" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#modal-delete-foto-album<?php echo $noticia->idnoticia;?>" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Excluir">
                          Excluir
                          </button>        
                        </div>
                      <?php } else { ?>
                        <img src="arquivos/<?=$imagem->arquivo;?>" alt="" width="88%"/>
                        <div class="row" style="margin-left: 0; justify-content: center;">
                          <button type="button" class="btn btn-warning col-md-6" style="margin-bottom: 0;">
                            <label for="arquivo<?=$i;?>">Selecione a nova imagem</label>
                            <input type="file" class="form-control" name="arquivo<?=$i;?>" id="arquivo<?=$i;?>"/>
                          </button>    
                          <button type="button" class="btn btn-danger col-md-6" data-toggle="modal" data-target="#modal-delete-foto-album<?php echo $noticia->idnoticia;?>" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Excluir">
                          Excluir
                          </button>        
                        </div>
                      <?php } ?>
                      </div> 
                    <div class="col-md-5">   
                      <p>Legenda da foto <?=$i;?> do álbum</p>
                      <textarea type="text" class="form-control" name="descricao<?=$i;?>" id="descricao<?=$i;?>"><?=$imagem->descricao?></textarea>
                    </div>
                      
                  </div>

                  <hr>
                  <br>
                  

                  <div class="modal fade" id="modal-delete-foto-album<?php echo $noticia->idnoticia;?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete"  aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apagar foto de album</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Você tem certeza que deseja apagar esta foto?<br>
                                    <b class="text-center">Esta ação é irreversível</b>.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <a href="delete-foto-album.php?id=<?=$noticia->idnoticia;?>&idimg=<?=$imagem->idimagem;?>" class="info"><button type="button" class="btn btn-danger">APAGAR</button></a>
                                </div>
                              </div>
                          </div>
                      </div>


                  
                  <input type="hidden" name="" value="<?=$i++;?>">
                  <?php } ?>
  
                        
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

    // Initialize CKEditor
    CKEDITOR.replace('descricao_capa',{
      width: "500px",
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

  </script>   

  <script>
    let doc = [];
    let des = [];
    
     for (i = 1; i <= 10; i++){
      doc[i] = document.getElementById('descricao'+i);
      des = 'descricao'+i;
      if (doc[i]){
        CKEDITOR.replace(des,{
          width: "500px",
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
