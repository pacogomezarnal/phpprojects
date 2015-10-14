<html>
	<head>
		<title>FOREACH ARRAYS PHP
		</title>
	</head>
	<body>
		<?php
			//Un ejemplo mas complejo es mediante la definicion de claves
			$array_claves=array(
				"valencia"=>array(
					"v"=>"Valencia",
					"c"=>"Castellon",
					"a"=>"Alicante"),
				"murcia"=>array(
					"m"=>"Murcia")
				);
				
			foreach ($array_claves as $key=>$valor) {
					echo "<div>";
					echo "Comunidad: ".$key;
				foreach ($valor as $k=>$v) {
					echo "Provincia: ".$v;
    				echo "</br>";
					echo "</div>";
			}
			}

		?>
	</body>
</html>