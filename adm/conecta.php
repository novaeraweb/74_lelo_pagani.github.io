<?php $URL_ATUAL= "$_SERVER[SERVER_NAME]";

if ($URL_ATUAL=='www.lelopagani.com.br') {
	$lelo = mysqli_connect('mysql745.umbler.com', 'lelopagani_user', 'lp*010203', 'lelopagani');
} else {
	$lelo = mysqli_connect('localhost', 'root', 'root', 'lelopagani');

}
mysqli_query($lelo, "SET NAMES 'utf8'");
mysqli_query($lelo,'SET character_set_connection=utf8');
mysqli_query($lelo,'SET character_set_client=utf8');
mysqli_query($lelo,'SET character_set_results=utf8');
$database_lelo = "lelopagani";
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');