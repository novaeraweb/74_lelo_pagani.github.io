<?php 
      ini_set('display_errors',1);
      ini_set('display_startup_erros',1);
      error_reporting(E_ALL);
      require_once 'conecta.php'; 
      require_once 'banco-login.php';
      session_start();

      $user = strip_tags(trim(addslashes($_POST["user"])));
      $senha = strip_tags(trim(addslashes($_POST["senha"])));

      if (validaUsuario($lelo, $user, $senha)) {
        
        $_SESSION["logado"] = true;
        $_SESSION["usuario_logado"] = $user;

        mysqli_select_db($lelo, $database_lelo);
        $query = "SELECT * FROM usuario WHERE user = '$user' AND ativo = 'Sim'";
        $rs_id = mysqli_query($lelo, $query) or die(mysqli_error($lelo));
        $row_rs = mysqli_fetch_assoc($rs_id);
        $_SESSION["user_id"] = $row_rs['idusuario'];
        $_SESSION["user_senha"] = $row_rs['senha'];
        
        header('location:home.php');

      } else {
        header('location:index.php?erro=true');
      }
  
      die();