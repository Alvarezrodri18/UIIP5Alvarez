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
				<h3>Problema 3 de Aurora Alvarez</h3>
				<article class="articulos">	
				 <br> <br>
					<figure>
						<img src="imagenes/whilee.png" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "P5_Alvarez_01_php/elwhile.php";
					?>
					<br> <br>
					<h4>P2 Explicacion del codigo</h4> <br>
					<p id="section3">
						Declaramos aumento como una variable y la igualamos a 5.
						En la condicion del while indicamos que mientras $aumento sea menor a
						10 imprimira su valor mediante la funcion echo. Tambien agregamos
						un contador para que no se vuelva infinito.

					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>