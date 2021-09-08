<?php
if(!$_SESSION['logado'] == true){
header('Location: index.php');
}