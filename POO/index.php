<?php
	include('Jugador.php');
	include('Carta.php');
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

			echo $jugador1->getNombre();
			echo $jugador2->getNombre();
			
			//Vamos a obtener los palos
			echo Carta::TREBOL;
			echo Carta::PICA;
		?>
	</body>
</html>