<?php require_once('../models/Usuario.php'); 

$nuevoUsuario = new Usuario();

$name = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['password'];
$id = $nuevoUsuario->RegistrarUsuario($name, $clave, $email);

if($id > 0){
	header('location: ../index.php');
}else{
	header('location: ../error.php');
}
 
?>