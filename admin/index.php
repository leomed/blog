<?php 	session_start();

/* ARCHVIO INDEX DEL ADMIN */
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


comprobarsession();
/* Comprobacion de sesion */
if (!$conexion) {
	header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);







require '../views/admin_index.view.php';



 ?>