<?php session_start(); 
require_once('../models/Usuario.php');

$objUsuario = new Usuario();
$usuario = $_POST['usuario-login'];
$password = $_POST['password-login'];
$current_url = $_POST['current_url'];
$array_url = explode('/', $current_url);
$location = $array_url[2];
$reg = $objUsuario->Login($usuario, $password);

if (empty($usuario) || empty($password)){
	header('location: ../error.php');
}else{ 
	if(count($reg) > 0){
		$_SESSION['usuario'] = $reg[0]['usuario'];
		$_SESSION['password'] = $reg[0]['password'];
		$_SESSION['id_usuario'] = $reg[0]['id'];
		if ($_SESSION['usuario'] == 'admin') {
			header('location: ../admin/index.php');
		}else{
			header('location: ../' . $location);
			#echo "../index.php";
		}
	}else{
		header('location: ../error.php');
		#echo "../error.php";
	}
}	
 ?>