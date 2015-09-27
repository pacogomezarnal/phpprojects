<html>
	<head>
		<title>FOR ARRAYS PHP
		</title>
	</head>
	<body>
		<?php
			//El ejemplo mas sencillo de array es un array sin claves
			$array_simple=array("rojo","verde","azul","magenta");

			//numero de elementos de un array
			echo "El numero de elementos del array es ".count($array_simple);

			for ($i = 0; $i < count($array_simple); $i++) {
				echo "El valor de la posicion $i es ".$array_simple[$i]."<br>";
			}

		?>
	</body>
</html>