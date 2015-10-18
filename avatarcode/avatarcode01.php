<?php
	function avatarCode($entrada)
	{
		return $entrada;
	}
?>
<html>
	<head>
		<title>CODE 01</title>
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
		<?php
			//COMPROBAMOS PARA EL VALOR 0. DEBERIAMOS OBTENER UN 0
			echo "<div class=".(avatarCode(0)==0?"OK":"KO").">";
			echo "Valor de entrada=0"."</br>"."valor esperado en la salida=0"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(0)."</br>";
			echo "</div>";
			echo "</br>";
			//COMPROBAMOS PARA EL VALOR 1. DEBERIAMOS OBTENER UN -1
			echo "<div class=".(avatarCode(1)==-1?"OK":"KO").">";
			echo "Valor de entrada=1"."</br>"." valor esperado en la salida=-1"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(1)."</br>";
			echo "</div>";
			//COMPROBAMOS PARA EL VALOR -1. DEBERIAMOS OBTENER UN 1
			echo "<div class=".(avatarCode(-1)==1?"OK":"KO").">";
			echo "Valor de entrada=-1"."</br>"." valor esperado en la salida=1"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(1)."</br>";
			echo "</div>";
		?>
	</body>
</html>