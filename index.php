<?php 
require 'admin/config.php';
require 'functions.php';

/* CONEXION A LA BASES DE DATOS PARA TRAER DATOS */
$conexion = conexion($bd_config);
/* CONEXION A LA BASES DE DATOS PARA TRAER DATOS */

/* SI NO HAY CONEXION REDIRIGE A ERROR.PHP*/
if (!$conexion) {
    header('Location: error.php');
}

/* SI NO HAY CONEXION REDIRIGE A ERROR.PHP*/



/* PARA TRAER LOS ARTICULOS */
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
/* PARA TRAER LOS ARTICULOS */


if (!$posts) {
    header('Location: error.php');
}





require 'views/index.view.php';


 ?>

 