
<?php require 'views/header.php'; ?>




<div class="contenedorform">	
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	
				<input type="text" id="nombre" class="for-control" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>"> 

				<input type="text" id="correo" class="for-control" name="correo" placeholder="Correo:">

				<textarea id="mensaje" class="area" name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje:"></textarea>

				
						<?php 	if(!empty($errores)): ?>
							<div class="alerterror">	
						<?php 	echo $errores; ?>
							<?php 	elseif ($enviado): ?>
							<div class="alertsuccess">	
							<p>	Enviado Correctamente</p>
							</div>
							<?php endif ?>
						
				<br />	
							
						
					
<div class="submitt">
	<input type="submit" name="submit" class="submit"value="Enviar Correo">

			</div>
		</form>



</div>			

