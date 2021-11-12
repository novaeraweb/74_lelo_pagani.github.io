<?php 
class Opiniao{
	public $idopiniao;
	public $titulo;
	public $descricao_breve;
	public $descricao_longa;
	public $link;
	public $arquivo;
	public $usuario;
	public $data;
	public $video;
	public $ativo;
}

class Noticia{
	public $idnoticia;
	public $titulo;
	public $linha_fina;
	public $descricao_longa;
	public $descricao_video;
	public $tempo;
	public $link;
	public $arquivo;
	public $usuario;
	public $data;
	public $video;
	public $ativo;
}

class Projeto{
	public $idprojeto;
	public $titulo;
	public $descricao_breve;
	public $nro_projeto;
	public $data_projeto;
	public $link;
	public $arquivo;
	public $usuario;
	public $data;
	public $ativo;
}

class User{
	public $idusuario;
	public $user;
	public $senha;
	public $descricao;
	public $tipo;
	public $ativo;
	public $arquivo;
}

class Perfil{
	public $idperfil;
	public $arquivo;
	public $data;
	public $hora;
	public $ativo;
	public $usuario;
}

class Categoria{
	public $idcategoria;
	public $data;
	public $usuario;
}