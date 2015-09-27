<html>
	<head>
		<title>FOREACH ARRAYS PHP
		</title>
	</head>
	<body>
		<?php
			//Un ejemplo mas complejo es mediante la definicion de claves
			$array_claves=array(
				"valencia"=>"Valencia",
				"alicante"=>"Alicante",
				"castellon"=>"Castellon",
				"barcelona"=>"Barcelona",
				"mdr"=>"Madrid"
				);

			foreach ($array_claves as $valor) {
    			echo "Valor: $valor<br />\n";
			}
		?>
	</body>
</html>