<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Login Administrativo</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 

        <meta name="description" content="Nova Era Web | (14)9.9628.5428 - Criação e desenvolvimento de sites responsivos, Marketing Digital e Hospedagem de Sites profissional." />
        <meta name="keywords" content="criação de sites, desenvolvimento de sites, sites, agencia web, agência digital, marketing online, hospedagem de sites, botucatu, avare, bauru, criação de sites botucatu, desenvolvimento de sites botucatu" />
        <meta name="author" content="Thiago Motta Vannuchi | Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP"> 
        <meta name="company" content="Agência Nova Era Web - Criação e desenvolvimento de sites | Botucatu/SP" />
        <meta name="robots" content="follow,index">
        <meta name= "googlebot" content="follow,index">

        <link rel="author" href="https://www.novaeraweb.com.br"/>
        <link rel="publisher" href="https://plus.google.com/+NovaEraWebCria%C3%A7%C3%A3oeDesenvolvimentoBotucatu/posts"/>
        <link rel="canonical" href="https://novaeraweb.com.br" />

        <!-- Open Graph Data -->
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Criação de sites | Agência Nova Era Web - Botucatu / SP" />
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://www.novaeraweb.com.br/"/>
        <meta property="og:image" content="https://novaeraweb.com.br/img/logo-nova-era-web.jpg" />
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta property="og:description" content="Website da agência Nova Era Web criação e desenvolvimento de sites, marketing Digital e hospedagem de sites" />
        <meta property="og:site_name" content="Agência Nova Era Web"/>
        <meta property="fb:admins" content="Facebook ID - toda conta developer possui um ID"/>
       <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style.css">
 
        <script src="js/responsive-nav.js"></script>
        <script src="js/picturefill.js"></script>
        
        <!-- Marcações HTML5 no IE9 anterior  -->
        <!--[if lt IE9]>
        <script src="js/html5shiv.min.js"></script>
        <![endif] -->


        
        <!--[if lt IE 9]>
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
    </head>
    <body class="inicio">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="main" class="container">
            <article class="grid_10 ">
                <div class="login">
                    <img class="logo" src="" alt="Logo">
                    <h3>Administrativo Lelo Pagani</h3>

                    <form method="POST" action="login.php">
                    <?php require_once "alerta.php" ?>
                    <input type="text" name="user" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <button id="submit" type="submit" class="btn btn-primary float-right">Enviar</button>
                    </form>
                </div>
            </article>


        </div>

        <footer class="container">
            <p class="grid_10"><?php echo date('o'); ?> - Desenvolvido por Nova Era Web</p>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
