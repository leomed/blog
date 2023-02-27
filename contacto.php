<?php 	
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];


if (!empty($nombre)) {
	$nombre = trim($nombre);
	$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

}else{
	$errores .= 'Por favor ingresa un nombre <br />';
}


if (!empty($correo)) {
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
		$errores .='Ingresa un correo valido <br />';
	}
}else {
	$errores .= 'Ingresa un correo. <br />';
}

if (!empty($mensaje)) {
	$mensaje = htmlspecialchars($mensaje);
	$mensaje = trim($mensaje);
	$mensaje = stripslashes($mensaje);
}else {
	$errores .= 'Ingresa el mensaje <br />';
}

if (!$errores) {
	$enviar_a = 'leo_amedri@hotmail.com';
	$asunto = 'Enviado desde';
	$mensajepreparado = "De: $nombre /n";
	$mensajepreparado .= "Correo: $correo /n";
	$mensajepreparado .= "Mensaje:" . $mensaje;

	mail(	$enviar_a, $asunto, $mensajepreparado);
	$enviado = 'true';

}





























 

}
















require 'views/contacto.view.php';

 ?>
