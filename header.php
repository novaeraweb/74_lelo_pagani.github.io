<!-- Header -->
<?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?>
<header id="header">
    <nav class="nav" id="MeuMenu">
        <div id="container"> 
            <div class="topo"><i><b></b></i> 
            <ul class="menu">
                <li class="<?php if($paginaCorrente == 'index.php') {echo 'active';} ?>" ><a href="index.php">HOME</a></li>
                <li class="<?php if($paginaCorrente == 'sobre-vereador-lelo-pagani.php') {echo 'active';} ?>" ><a href="sobre-lelo-pagani.php">SOBRE</a></li>
                <li class="<?php if($paginaCorrente == 'noticias-vereador-lelo-pagani.php') {echo 'active';} ?>" ><a href="noticias-vereador-lelo-pagani.php">NOTÍCIAS</a></li>
                <li class="<?php if($paginaCorrente == 'blog-vereador-lelo-pagani.php') {echo 'active';} ?>" ><a href="blog-vereador-lelo-pagani.php">BLOG</a></li>
                <li class="<?php if($paginaCorrente == 'projetos-lelo-pagani.php') {echo 'active';} ?>" ><a href="projetos-vereador-lelo-pagani.php">PROJETOS</a></li>
            </ul>
            </div> 
        </div>
    </nav>
    <div class="inner">
        <a href="#" class="image avatar"><img src="assets/images/avatar.jpg" alt="" /></a>
        <h1><strong>Lelo Pagani</strong>, vereador.</h1>
    </div>
</header>
