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
				<h3>Problema 1 de Aurora Alvarez</h3>
				<article class="articulos">	
				
					<figure>
						<img src="imagenes/forimg.png" alt="">
					</figure>
					<br> <br>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "P5_Alvarez_01_php/for.php";
					?>
					<br> <br>
					<h4>P1 Explicacion del codigo</h4>
					<p id="section11">
					
					El código PHP ejecutado tiene dos partes: la primera imprime 
					"Parte de PHP" y la segunda es un bucle que se ejecuta 10 veces de 0 a 9, 
					por cada vez que se ejecuta se escribe una línea, la variable $i contiene 
					el número de línea que se está escribiendo. 
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>