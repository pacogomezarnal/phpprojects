<html>
	<head>
		<title>CONTROL DE FLUJO IF PHP
		</title>
	</head>
	<body>
		<?php
			//Definicion del for
			//INICIO:Al inicio del for y solo una vez $i=1
			//CONDICION:En cada paso, o repeticion se comprueba $i <= 10
		    //Si la condicion es TRUE, se ejecuta el contenido del for
			//En cada vuelta se ejecutara al final $i++
			for ($i = 1; $i <= 10; $i++) {
				echo 'El valor de $i es ';
   				echo $i;
   				echo "<br>";
			}
			//Break

			for ($i = 1; ; $i++) {
    			if ($i > 10) {
        			break;
    			}
    			echo $i;
			}
		?>
	</body>
</html>