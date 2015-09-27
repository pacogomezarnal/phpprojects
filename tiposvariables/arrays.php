<html>
	<head>
		<title>ARRAYS PHP
		</title>
	</head>
	<body>
		<?php
			//El ejemplo mas sencillo de array es un array sin claves
			$array_simple=array("rojo","verde","azul",1.2);

			//Imprimir por pantalla un array
			//echo $array_simple; //Producirá un error
			var_dump($array_simple);
			print_r($array_simple);

			//Un ejemplo mas complejo es mediante la definicion de claves
			$array_claves=array(
				"valencia"=>"Valencia",
				"alicante"=>"Alicante",
				"castellon"=>"Castellon",
				"barcelona"=>"Barcelona",
				"mdr"=>"Madrid"
				);

			print_r($array_claves);
			echo "<br>";
			//Seleccionando un elemento
			echo $array_simple[1];
			echo $array_claves["mdr"];
			echo "<br>";
			//Modificar el valor de una posicion
			$array_claves["mdr"]="MDR";
			echo $array_claves["mdr"];
		?>
	</body>
</html>