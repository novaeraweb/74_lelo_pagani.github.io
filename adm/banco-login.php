<?php 

	 function validaUsuario($lelo, $user, $senha) {
		$senhaMd5 = md5($senha);
		$user = mysqli_real_escape_string($lelo, $user);
		$senhaMd5 = mysqli_real_escape_string($lelo, $senhaMd5);
		$ativo = Sim;
		$ativo = mysqli_real_escape_string($lelo, $ativo);
	 	$query = "SELECT * FROM usuario WHERE user='$user' AND senha='$senhaMd5' AND ativo='$ativo'";
	 	$resultado = mysqli_query($lelo, $query);
	 	$usuario = mysqli_fetch_assoc($resultado);
	 	return $usuario;
	 }

	 

	 
