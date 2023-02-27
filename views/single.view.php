

<?php require 'header.php'; ?>


<body>




	<div class="contenedor">
		
		<div class="posts">
			<article>
				<h2 class="titulo"><?php echo $post['titulo'];  ?></h2>
				<p class="fecha"><?php echo fecha($post['fecha']);  ?></p>
				<div class="thumb">
					<a href="">
						<img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'];  ?>" alt="<?php echo $post['titulo'];  ?>">
					</a>
					
				</div>
				<p class="extracto">
					<?php echo nl2br($post['texto']);  ?>
				</p>
				
			</article>
		</div>



	</div>
	</div>

		<?php 	require 'footer.php'; ?>

	
</body>



