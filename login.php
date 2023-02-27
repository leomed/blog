
<?php session_start();

require 'admin/config.php';
require 'functions.php';

/* SI LOS DATOS INGRESADOS CORRESPONDEN CON LOS USUARIOS EN CONFIG */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);
	if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
		$_SESSION['admin'] = $blog_admin['usuario'];
		header('Location:' . RUTA . '/admin');
	}
}
/* SI LOS DATOS INGRESADOS CORRESPONDEN CON LOS USUARIOS EN CONFIG */












require 'views/login.view.php'; 




?>

