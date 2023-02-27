<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Active Blog</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">


</head>


<header>


		<div class="contenedor" id="menuPrincipal">
			<div class="logo izquierda">
				<div class="texto">
					<p><a href="<?php echo RUTA;?>">Active Blog</a>
					</p>


	    </div>   	


				</div>
					
			
			
				
				

				<div class="derecha">
					
						
					<div class="lookfor">	
					<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
				
							<div class="busqueda">	
						<input type="text" name="busqueda" placeholder="Buscar">

						<button type="submit" ><i class="bi bi-search"></i></button>
						</div>

					</form>
					<div class="sito">	

				
					<i id="menuChico" class="bi bi-list"></i>
	    			</div>	
					</div>

				<div class="todo">	
								
					<nav class="menu">
						<ul>
							<li><a href="#"><i class="bi bi-facebook"> Facebook </i></a></li>
							<li><a href="#"><i class="bi bi-instagram"> Instagram </i></a></li>
							<li class="envelope"><a href="contacto.php?id;"><i class="bi bi-envelope"> Contacto</i></a></li>
							<li class="envelope" ><a href="login.php?id;?>"><i class="bi bi-person"> Ingresar</i></a></li>
						</ul>
					</nav>
							</div>
				
				</div>

				
	</header>	

</html>