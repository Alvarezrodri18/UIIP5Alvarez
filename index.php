<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				<br>
				<p>
				<b>¿Para que se utiliza el bucle FOR?</b> <br>
				El bucle FOR se utiliza para repetir una o más instrucciones un determinado número de veces.
				
				</p>
				<br>
				<h4>Conclusiones </h4>
				<p>
				El bucle for es muy sencillo de utilizar, tiene 3 partes incluidas en el parentesis, 
				que nos sirven para definir cómo deseamos que se realicen las repeticiones. 
				La primera parte es la inicialización, La segunda parte es la condición, que se evaluará
				cada vez que comience una iteración del bucle. Por último tenemos la actualización, 
				que sirve para indicar los cambios que queramos ejecutar en las variables cada vez que 
				termina la iteración del bucle.
				</p>
				<figure>
					<img src="imagenes/for.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4><br>
				<p>
				<b>¿Cómo declaramos una variable? </b> <br>
				Para declarar un nombre de variable válido.
				Se declara anteponiendo el signo $ seguido del nombre de la variable igualandolo a un 
				numero finalizando con punto y coma.
				<br><br>
				<b>¿Importan las mayusculas y minusculas en la declaracion de las variables? </b> <br>
				Si importan las mayusculas y minuculas ya que cuando declaro una variable y luego 
				la uso para imprimirla o hacer alguna operacion debe ser indicada de las misma forma.
				</p>
				<br>
				<h4>Conclusiones </h4>
				<p>
				Como conclusion nuestra variable puede comenzar con una letra pero nunca por un numero,
				si no escribimos exactamente como es nuestra variable podria no identificarla en el resto 
				del codigo.
				</p>
				<figure>
					<img src="imagenes/variable.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4><br>
				<p>
				<b>¿Que es el bucle WHILE? </b><br>
				Crea un bucle que ejecuta una sentencia especificada mientras cierta
				 condición se evalúe como verdadera. <br>
				<b> ¿Como funciona el while?</b><br>
				 Una expresión que se evalúa antes de cada paso del bucle. Si esta 
				 condición se evalúa como verdadera, se ejecuta sentencia. Cuando la
				 condición se evalúa como false, la ejecución continúa con la sentencia 
				 posterior al bucle while.
				</p>
				<br>
				<h4>Conclusiones </h4>
				<p>
				Las estructuras de repetición son utilizadas para repetir un proceso 
				las veces que sea necesario en un determinado programa. 
				While es una de las más utilizadas en este proceso , ya que su estructura 
				es simple y fácil de implementar.
				</p>
				<figure>
					<img src="imagenes/while.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>