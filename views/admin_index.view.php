

<?php 	require '../views/header.php'; ?>

<body>

	



	<div class="contenedor">
		
					<h2>	Panel De control</h2>
			
			<div class="superior">	
			
			<div class="edicion">
				
			<a href="nuevo.php">Nuevo Post</a>
			<a href="cerrar.php">Cerrar Sesion</a>
			</div>
			</div>

	<?php foreach ($posts as $post): ?>	
		<div class="postos">	
		<div class="poste">
			<article>
				<h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']; ?></h2>
				
				<a href="editar.php?id=<?php 	echo $post['id']; ?>">Editar</a>
				<a href="../single.php?id=<?php 	echo $post['id']; ?>">Ver</a>
				<a href="borrar.php?id=<?php 	echo $post['id']; ?>">Borrar</a>
				


			</article>
				</div>
		</div>
	<?php endforeach; ?>
	


		<?php 	require '../paginacion.php'; ?>

	</div>
	</div>

		<?php 	require '../views/footer.php'; ?>

	
</body>



</html>