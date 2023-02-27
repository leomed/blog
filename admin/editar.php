<?php session_start();
require 'config.php';
require '../functions.php';


comprobarsession();


/* SI HAY CONEXION CON LA BASE DE DATOS TODO BIEN */
$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}
 
/* SI HAY thumb_guardadaON CON LA BASE DE DATOS TODO BIEN */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = limpiarDatos($_POST['texto']);
	$id = limpiarDatos($_POST['id']);
	$thumb_guardada = $_POST['thumb_guardada'];
	$thumb = $_FILES['thumb'];
		
		if (empty($thumb['name'])) {
			$thumb = $thumb_guardada;

		}else {
			$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES[thumb]['name'];
			move_uploaded_file($_FILE['thumb']['tmp_name'], $archivo_subido);
			$thumb = $_FILES[thumb]['name'];
		}
		$statement = $conexion->prepare(
			'UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id'
		);
		$statement->execute(array(
			':titulo' => $titulo,
			':extracto' => $extracto,
			':texto' => $texto,
			':thumb' => $thumb,
			':id' => $id
		));

		header ('Location: ' . RUTA . '/admin');
}else {
	$id_articulos = id_articulos($_GET['id']);

	if (empty($id_articulos)) {
		header('Location: '. RUTA . '/admin');
	}
	$post = obtener_post_por_id($conexion, $id_articulos);
	if (!$post) {
		header('Location: '. RUTA . '/admin');
			}

		$post= $post[0];
}





require '../views/editar.view.php';
 ?>