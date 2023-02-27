<?php session_start();
require 'config.php';
require '../functions.php';


comprobarsession();



$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}


/* SI LOS DATOS FUERON ENVIADOS */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = ($_POST['texto']);
	$thumb = $_FILES['thumb']['tmp_name'];

/* EL DESTINO DE LA  IMAGEN GUARDADA EN LA VARIABLE */
	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
/* EL DESTINO DE LA IMAGEN GUARDADA EN LA VARIABLE */

/* LA IMAGEN SE SUBE DEL USUARIO A LA BASE DE ATOS */
 move_uploaded_file($thumb, $archivo_subido);
 /* LA IMAGEN SE SUBE DEL USUARIO A LA BASE DE ATOS */
  $statement = $conexion->prepare('INSERT INTO articulos(id, titulo, extracto, texto, thumb) VALUES(null, :titulo, :extracto, :texto, :thumb)'
);

  $statement->execute(array(
  	':titulo' => $titulo,
  	':extracto' => $extracto,
  	':texto' => $texto,
  	':thumb' => $_FILES['thumb']['name']
  ));

  header('Location: '. RUTA . '/admin');
}
/* SI LOS DATOS FUERON ENVIADOS */










require '../views/nuevo.view.php';

 ?>