<html>
	<head>
		<title>EJEMPLO OPERADORES PHP
		</title>
	</head>
	<body>
		<?php
			//Definimos dos variables de ejemplo
			$a=5;
			$b=3;
			$salto="<br>";

			//Operadores aritmeticos;
			echo 'El valor de  es $a+$b es '.($a+$b).$salto;
			echo 'El valor de $a/$b es '.$a/$b.$salto;

			//Operadores de incremeto/decremento
			echo 'El valor de $a++ es '.$a++.$salto;
			echo 'El valor de $a es '.$a.$salto;

			//Operadores de asignacion
			$c=$b;

			echo'El valor de $c=$b es '.$c.$salto;
			$c+=$b;
			echo 'El valor de $c+=$b es '.$c.$salto;
		?>
	</body>
</html>