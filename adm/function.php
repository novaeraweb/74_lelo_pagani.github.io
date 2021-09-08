<?php 

// Queries blogs
function listaBlog ($lelo) {
 	$query = "SELECT b.*
	 		  FROM blog b
			  WHERE b.ativo = 'Sim'
			  ORDER BY b.titulo ASC";
 	$resultado = mysqli_query($lelo, $query);
 	$blogs = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$blog = new Blog();
 		$blog->idblog = $array['idblog'];
 		$blog->titulo = $array['titulo'];
		$blog->descricao_breve = $array['descricao_breve'];
		$blog->descricao_longa = $array['descricao_longa'];
		$blog->arquivo = $array['arquivo'];
		$blog->link = $array['link'];
		$blog->usuario = $array['usuario'];
		$blog->data = $array['data'];
		$blog->video = $array['video'];
		$blog->ativo = $array['ativo'];

 		array_push($blogs, $blog);
 	}
 	return $blogs;
}

function listaBlogId ($lelo, $id) {
 	$query = "SELECT b.*
	 		  FROM blog b
			  WHERE b.ativo = 'Sim'AND b.idblog=$id";
	$resultado = mysqli_query($lelo, $query);
	$blogs = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$blog = new Blog();
		$blog->idblog = $array['idblog'];
		$blog->titulo = $array['titulo'];
		$blog->descricao_breve = $array['descricao_breve'];
		$blog->descricao_longa = $array['descricao_longa'];
		$blog->arquivo = $array['arquivo'];
		$blog->link = $array['link'];
		$blog->usuario = $array['usuario'];
		$blog->data = $array['data'];
		$blog->video = $array['video'];
		$blog->ativo = $array['ativo'];

		array_push($blogs, $blog);
	}
 	return $blogs;
}


function listaNoticia ($lelo) {
 	$query = "SELECT n.*
	 		  FROM noticia n
			  WHERE n.ativo = 'Sim'
			  ORDER BY n.titulo ASC";
 	$resultado = mysqli_query($lelo, $query);
 	$noticias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$noticia = new Noticia();
 		$noticia->idnoticia = $array['idnoticia'];
 		$noticia->titulo = $array['titulo'];
		$noticia->descricao_breve = $array['descricao_breve'];
		$noticia->descricao_longa = $array['descricao_longa'];
		$noticia->arquivo = $array['arquivo'];
		$noticia->link = $array['link'];
		$noticia->usuario = $array['usuario'];
		$noticia->data = $array['data'];
		$noticia->video = $array['video'];
		$noticia->ativo = $array['ativo'];

 		array_push($noticias, $noticia);
 	}
 	return $noticias;
}

function listaNoticiaId ($lelo, $id) {
 	$query = "SELECT n.*
	 		  FROM noticia n
			  WHERE n.ativo = 'Sim'AND n.idnoticia=$id";
	$resultado = mysqli_query($lelo, $query);
	$noticias = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$noticia = new Noticia();
		$noticia->idnoticia = $array['idnoticia'];
		$noticia->titulo = $array['titulo'];
		$noticia->descricao_breve = $array['descricao_breve'];
		$noticia->descricao_longa = $array['descricao_longa'];
		$noticia->arquivo = $array['arquivo'];
		$noticia->link = $array['link'];
		$noticia->usuario = $array['usuario'];
		$noticia->data = $array['data'];
		$noticia->video = $array['video'];
		$noticia->ativo = $array['ativo'];

		array_push($noticias, $noticia);
	}
 	return $noticias;
}

function listaProjeto ($lelo) {
	$query = "SELECT p.*
			  FROM projeto p
			 WHERE p.ativo = 'Sim'
			 ORDER BY p.titulo ASC";
	$resultado = mysqli_query($lelo, $query);
	$projetos = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$projeto = new Projeto();
		$projeto->idprojeto = $array['idprojeto'];
		$projeto->titulo = $array['titulo'];
	   $projeto->descricao_breve = $array['descricao_breve'];
	   $projeto->descricao_longa = $array['descricao_longa'];
	   $projeto->arquivo = $array['arquivo'];
	   $projeto->link = $array['link'];
	   $projeto->usuario = $array['usuario'];
	   $projeto->data = $array['data'];
	   $projeto->ativo = $array['ativo'];

		array_push($projetos, $projeto);
	}
	return $projetos;
}

function listaProjetoId ($lelo, $id) {
	$query = "SELECT p.*
			  FROM projeto p
			 WHERE p.ativo = 'Sim'AND p.idprojeto=$id";
   $resultado = mysqli_query($lelo, $query);
   $projetos = array();
   while ($array = mysqli_fetch_assoc($resultado)) {
	   $projeto = new Projeto();
	   $projeto->idprojeto = $array['idprojeto'];
	   $projeto->titulo = $array['titulo'];
	   $projeto->descricao_breve = $array['descricao_breve'];
	   $projeto->descricao_longa = $array['descricao_longa'];
	   $projeto->arquivo = $array['arquivo'];
	   $projeto->link = $array['link'];
	   $projeto->usuario = $array['usuario'];
	   $projeto->data = $array['data'];
	   $projeto->ativo = $array['ativo'];

	   array_push($projetos, $projeto);
   }
	return $projetos;
}