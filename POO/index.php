<?php
	include('Jugador.php');
?>
<html>
	<head>
		<title>HOLDEM EXAMPLE
		</title>
	</head>
	<body>
		<?php
			$jugador1 = new Jugador();
			$jugador2 = new Jugador();

			$jugador1->setNombre("Paco");
			$jugador2->setNombre("Pepe");

			$jugador1->mostrarNombre();
			$jugador2->mostrarNombre();
		?>
	</body>
</html>