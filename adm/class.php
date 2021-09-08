<?php 
class Blog{
	public $idblog;
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
	public $descricao_breve;
	public $descricao_longa;
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
	public $descricao_longa;
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