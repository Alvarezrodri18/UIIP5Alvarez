<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body >
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Aurora Alvarez</h3>
				<article class="articulos">
				<br> <br>	
					<figure>
						<img src="imagenes/variableimg.png" alt="">
					</figure>
					<br> <br>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "P5_Alvarez_01_php/variable.php";
					?>
					
					<h4>P2 Explicacion del codigo</h4>
					<p id="p2">
						Declaramos una variable como Name y la igualamos a Miguel, el cual lo mostramos 
						mediante la funcion echo.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>