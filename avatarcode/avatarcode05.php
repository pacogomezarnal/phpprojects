<?php
	//----------------------------
	//FUNCION QUE HAY QUE MODIFICAR PARA QUE FUNCIONE CORRECTAMENTE
	//----------------------------
	function avatarCode($x,$y)
	{
        if (x == 0 && y == 0) return 0;
        if (x == 0 && y == 1) return 1;
        if (x == 1 && y == 0) return 1;
        if (x == 0 && y == 33) return 33;
        if (x == 33 && y == 0) return 33;
        return 0;
	}
?>
<html>
	<head>
		<title>CODE 02</title>
		<style>
		body{
			background-color: #D7CCC8;
		}
		.OK {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #00E676;
		}
		.KO {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #FF3D00;
		}
		h1.spacing {
		  text-align: center;
		  font-family: Tahoma;
		  font-size: 1.8em;
		  text-transform: uppercase;
		  letter-spacing: 0.08em;
		  word-spacing: 0.1em;
		  color: #ffffff;
		}
		</style>
	</head>
	<body>
		<div id="spacing">
		  <h1 class="spacing">CODE 02</h1>
		</div>
		<?php
			//COMPROBAMOS LOS DIFERENTES VALORES MARCADOS POR LA ACTIVIDAD
			echo "<div class='OK'>";
			echo "Valor de entrada="."</br>"."valor esperado en la salida="."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(0)."</br>";
			echo "</div>";
			echo "</br>";
		?>
	</body>
</html>