<?php 

	 function validaUsuario($lelo, $user, $senha) {
		$senhaMd5 = md5($senha);
		$user = mysqli_real_escape_string($lelo, $user);
	 	$query = "SELECT * FROM usuario WHERE user='$user' AND senha='$senhaMd5' AND tipo='admin' OR tipo='user' AND ativo='sim' OR ativo='Sim'";
	 	$resultado = mysqli_query($lelo, $query);
	 	$usuario = mysqli_fetch_assoc($resultado);
	 	return $usuario;
	 }

	 

	 
