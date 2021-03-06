<?php 
function listaNoticia ($lelo) {
 	$query = "SELECT n.*
						FROM noticia n
						WHERE n.ativo = 'Sim'
						ORDER BY n.data_noticia DESC";
	
 	$resultado = mysqli_query($lelo, $query);
 	$noticias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$noticia = new Noticia();
 		$noticia->idnoticia = $array['idnoticia'];
 		$noticia->titulo = $array['titulo'];
		$noticia->linha_fina = $array['linha_fina'];
		$noticia->descricao_longa = $array['descricao_longa'];
		$noticia->tempo = $array['tempo'];
		$noticia->arquivo_capa = $array['arquivo_capa'];
		$noticia->descricao_capa = $array['descricao_capa'];
		$noticia->descricao_video = $array['descricao_video'];
		$noticia->link = $array['link'];
		$noticia->usuario = $array['usuario'];
		$noticia->data = $array['data'];
		$noticia->data_noticia = $array['data_noticia'];
		$noticia->video = $array['video'];
		$noticia->ativo = $array['ativo'];

 		array_push($noticias, $noticia);
 	}
 	return $noticias;
}

function listaNoticiaHome ($lelo) {
 	$query = "SELECT n.*
						FROM noticia n
						WHERE n.ativo = 'Sim'
						ORDER BY n.idnoticia DESC
						LIMIT 10";
 	$resultado = mysqli_query($lelo, $query);
 	$noticias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$noticia = new Noticia();
 		$noticia->idnoticia = $array['idnoticia'];
 		$noticia->titulo = $array['titulo'];
		$noticia->linha_fina = $array['linha_fina'];
		$noticia->descricao_longa = $array['descricao_longa'];
		$noticia->tempo = $array['tempo'];
		$noticia->arquivo_capa = $array['arquivo_capa'];
		$noticia->descricao_capa = $array['descricao_capa'];
		$noticia->descricao_video = $array['descricao_video'];
		$noticia->link = $array['link'];
		$noticia->usuario = $array['usuario'];
		$noticia->data = $array['data'];
		$noticia->data_noticia = $array['data_noticia'];
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
		$noticia->linha_fina = $array['linha_fina'];
		$noticia->descricao_longa = $array['descricao_longa'];
		$noticia->tempo = $array['tempo'];
		$noticia->arquivo_capa = $array['arquivo_capa'];
		$noticia->descricao_capa = $array['descricao_capa'];
		$noticia->descricao_video = $array['descricao_video'];
		$noticia->link = $array['link'];
		$noticia->usuario = $array['usuario'];
		$noticia->data = $array['data'];
		$noticia->data_noticia = $array['data_noticia'];
		$noticia->video = $array['video'];
		$noticia->ativo = $array['ativo'];

		array_push($noticias, $noticia);
	}
 	return $noticias;
}

function listaImagensIdNoticia ($lelo, $id) {
 	$query = "SELECT i.*
	 		  FROM imagem i
			  WHERE i.idnoticia=$id";
	$resultado = mysqli_query($lelo, $query);
	$imagens = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$imagem = new Noticia();
		$imagem->idimagem = $array['idimagem'];
		$imagem->idnoticia = $array['idnoticia'];
		$imagem->arquivo = $array['arquivo'];
		$imagem->descricao = $array['descricao'];

		array_push($imagens, $imagem);
	}
 	return $imagens;
}

function listaProjeto ($lelo) {
	$query = "SELECT p.*, c.*
	 					FROM projeto p
	 					INNER JOIN categoria c ON (p.categoria = c.idcategoria)
	 					WHERE p.ativo = 'Sim'
	  					ORDER BY p.titulo ASC";
	$resultado = mysqli_query($lelo, $query);
	$projetos = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
			$projeto = new Projeto();
			$projeto->idprojeto = $array['idprojeto'];
			$projeto->titulo = $array['titulo'];
			$projeto->descricao_breve = $array['descricao_breve'];
			$projeto->nro_projeto = $array['nro_projeto'];
			$projeto->data_projeto = $array['data_projeto'];
			$projeto->arquivo = $array['arquivo'];
			$projeto->link = $array['link'];
			$projeto->usuario = $array['usuario'];
			$projeto->data = $array['data'];
			$projeto->ativo = $array['ativo'];
			$projeto->categoria = $array['categoria'];
			$projeto->nome_categoria = $array['nome'];
			$projeto->idcategoria = $array['idcategoria'];

		array_push($projetos, $projeto);
	}
	return $projetos;
}

function listaProjetoId ($lelo, $id) {
	$query = "SELECT p.*, c.*
			  FROM projeto p
				INNER JOIN categoria c ON (p.categoria = c.idcategoria)
			 	WHERE p.ativo = 'Sim'AND p.idprojeto=$id";
   $resultado = mysqli_query($lelo, $query);
   $projetos = array();
   while ($array = mysqli_fetch_assoc($resultado)) {
	   $projeto = new Projeto();
	   $projeto->idprojeto = $array['idprojeto'];
	   $projeto->titulo = $array['titulo'];
	   $projeto->descricao_breve = $array['descricao_breve'];
	   $projeto->nro_projeto = $array['nro_projeto'];
	   $projeto->data_projeto = $array['data_projeto'];
	   $projeto->arquivo = $array['arquivo'];
	   $projeto->link = $array['link'];
	   $projeto->usuario = $array['usuario'];
	   $projeto->data = $array['data'];
	   $projeto->ativo = $array['ativo'];
	   $projeto->categoria = $array['categoria'];
		 $projeto->nome_categoria = $array['nome'];

	   array_push($projetos, $projeto);
   }
	return $projetos;
}
function listaProjetoCategoriaId ($lelo, $id) {
	$query = "SELECT p.*, c.*
			  FROM projeto p
				INNER JOIN categoria c ON (p.categoria = c.idcategoria)
			 	WHERE p.ativo = 'Sim' AND c.idcategoria=$id";
   $resultado = mysqli_query($lelo, $query);
   $projetos = array();
   while ($array = mysqli_fetch_assoc($resultado)) {
	   $projeto = new Projeto();
	   $projeto->idprojeto = $array['idprojeto'];
	   $projeto->titulo = $array['titulo'];
	   $projeto->descricao_breve = $array['descricao_breve'];
	   $projeto->nro_projeto = $array['nro_projeto'];
	   $projeto->data_projeto = $array['data_projeto'];
	   $projeto->arquivo = $array['arquivo'];
	   $projeto->link = $array['link'];
	   $projeto->usuario = $array['usuario'];
	   $projeto->data = $array['data'];
	   $projeto->ativo = $array['ativo'];
	   $projeto->categoria = $array['categoria'];
		 $projeto->nome_categoria = $array['nome'];

	   array_push($projetos, $projeto);
   }
	return $projetos;
}
function listaPerfil ($lelo) {
	$query = "SELECT p.*
						FROM perfil p
						WHERE p.ativo = 'Sim'
						ORDER BY p.idperfil ASC";
	$resultado = mysqli_query($lelo, $query);
	$perfis = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$perfil = new Perfil();
		$perfil->idperfil = $array['idperfil'];
		$perfil->arquivo = $array['arquivo'];
		$perfil->data = $array['data'];
		$perfil->usuario = $array['usuario'];
		$perfil->ativo = $array['ativo'];

		array_push($perfis, $perfil);
	}
	return $perfis;
}

function listaPerfilId ($lelo, $id) {
	$query = "SELECT p.*
						FROM perfil p
						WHERE p.ativo = 'Sim' AND p.idperfil=$id";
   $resultado = mysqli_query($lelo, $query);
   $perfis = array();
   while ($array = mysqli_fetch_assoc($resultado)) {
	   $perfil = new Perfil();
		 $perfil->idperfil = $array['idperfil'];
		 $perfil->arquivo = $array['arquivo'];
		 $perfil->data = $array['data'];
		 $perfil->usuario = $array['usuario'];
		 $perfil->ativo = $array['ativo'];

	   array_push($perfis, $perfil);
   }
	return $perfis;
}

function listaProjetoHome ($lelo) {
	$query = "SELECT p.*, c.*
			  FROM projeto p
				INNER JOIN categoria c ON (p.categoria = c.idcategoria)
			  ORDER BY p.data DESC
			  LIMIT 10";
   $resultado = mysqli_query($lelo, $query);
   $projetos = array();
   while ($array = mysqli_fetch_assoc($resultado)) {
	   $projeto = new Projeto();
	   $projeto->idprojeto = $array['idprojeto'];
	   $projeto->titulo = $array['titulo'];
	   $projeto->descricao_breve = $array['descricao_breve'];
	   $projeto->nro_projeto = $array['nro_projeto'];
	   $projeto->data_projeto = $array['data_projeto'];
	   $projeto->arquivo = $array['arquivo'];
	   $projeto->link = $array['link'];
	   $projeto->usuario = $array['usuario'];
	   $projeto->data = $array['data'];
	   $projeto->ativo = $array['ativo'];
	   $projeto->categoria = $array['categoria'];
		 $projeto->nome_categoria = $array['nome'];

	   array_push($projetos, $projeto);
   }
	return $projetos;
}

function listaCategoria ($lelo) {
	$query = "SELECT c.* FROM categoria c ORDER BY nome ASC";
	$resultado = mysqli_query($lelo, $query);
	$categorias = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria();
		$categoria->idcategoria = $array['idcategoria'];
		$categoria->nome = $array['nome'];
		$categoria->usuario = $array['usuario'];
		$categoria->data = $array['data'];

		array_push($categorias, $categoria);
	}
	return $categorias;
}

function listaCategoriaId ($lelo, $id) {
	$query = "SELECT c.* FROM categoria c WHERE c.idcategoria = $id";
	$resultado = mysqli_query($lelo, $query);
	$categorias = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria();
		$categoria->idcategoria = $array['idcategoria'];
		$categoria->nome = $array['nome'];
		$categoria->usuario = $array['usuario'];
		$categoria->data = $array['data'];

		array_push($categorias, $categoria);
	}
	return $categorias;
}