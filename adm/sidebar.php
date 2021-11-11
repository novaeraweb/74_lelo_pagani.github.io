<?php
require_once "class.php";
require_once "function.php";
require_once "conecta.php";
mysqli_select_db($lelo, "lelopagani");
?>
<div class="sidebar" data-color="white" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="https://www.lelopagani.com.br/" class="simple-text logo-normal" target="_blank" rel="noopener" rel="noreferrer">
          <img src="../assets/images/logo-lelo-pagani-vereador-claro.png" alt="Logo Lelo Pagani">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="home.php">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          
        </ul>
      
        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="Seção destinada ao cadastro de Notícias">
            <a class="nav-link" data-toggle="collapse" href="#menu-noticia" aria-expanded="false" aria-controls="menu-noticia">
              <i class="material-icons">view_list</i>
              <p><strong>Notícias</strong> <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-noticia">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-noticia.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-noticia.php"><i class="material-icons">search</i> Listar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>

        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="eção destinada ao cadastro de Projetos">
            <a class="nav-link" data-toggle="collapse" href="#menu-projeto" aria-expanded="false" aria-controls="menu-colecao">
              <i class="material-icons">view_list</i>
              <p><strong>Projetos</strong><i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-projeto">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-projeto.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-projeto.php"><i class="material-icons">search</i> Listar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>

        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="Seção destinada ao cadastro de imagens de perfil">
            <a class="nav-link" data-toggle="collapse" href="#menu-perfil" aria-expanded="false" aria-controls="menu-perfil">
              <i class="material-icons">view_list</i>
              <p><strong>Perfil</strong><i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-perfil">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="editar-imagens-perfil.php?id=1"><i class="material-icons">refresh</i> Alterar</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-perfil.php"><i class="material-icons">search</i> Listar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>
        
        
      </div>