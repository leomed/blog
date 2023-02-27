<?php 
require 'admin/config.php';
require 'functions.php';

/* CONEXION A BASE DE DATOS */
$conexion = conexion($bd_config);
/* CONEXION A BASE DE DATOS */

/* EVITA QUE EL USUARIO INGRESE CODIGO EN LA BARRA DE BUSQUEDA */
$id_articulos = id_articulos($_GET['id']);
/* EVITA QUE EL USUARIO INGRESE CODIGO EN LA BARRA DE BUSQUEDA */


if (!empty($id_articulo)) {
    header('Location: index.php');
}


/* SI FALLA LA CONEXION MUESTRA LA PAG DE ERROR*/
if (!$conexion) {
    header('Location: error.php');
}
/* SI FALLA LA CONEXION MUESTRA LA PAG DE ERROR*/


$post = obtener_post_por_id($conexion, $id_articulos);

/* SI EN LA BARRA DE BUSQUEDA PONE UN ID QUE NO EXISTE LO REDIRECCIONA*/
if (!$post) {
    header('Location: index.php');
}
/* SI EN LA BARRA DE BUSQUEDA PONE UN ID QUE NO EXISTE LO REDIRECCIONA*/


$post = $post[0];


require 'views/single.view.php';

 ?>