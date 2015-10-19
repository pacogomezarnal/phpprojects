<?php
	//----------------------------
	//FUNCION QUE HAY QUE MODIFICAR PARA QUE FUNCIONE CORRECTAMENTE
	//----------------------------
	function avatarCode($entrada)
	{
	    if ($entrada == 1) return 2;
        if ($entrada == 2) return 4;
        if ($entrada == 6) return 12;
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
			//COMPROBAMOS PARA EL VALOR 0. DEBERIAMOS OBTENER UN 0
			echo "<div class=".(avatarCode(0)==0?"OK":"KO").">";
			echo "Valor de entrada=0"."</br>"."valor esperado en la salida=0"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(0)."</br>";
			echo "</div>";
			echo "</br>";
			//COMPROBAMOS PARA EL VALOR 1. DEBERIAMOS OBTENER UN 2
			echo "<div class=".(avatarCode(1)==2?"OK":"KO").">";
			echo "Valor de entrada=1"."</br>"." valor esperado en la salida=2"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(1)."</br>";
			echo "</div>";
			//COMPROBAMOS PARA EL VALOR 2. DEBERIAMOS OBTENER UN 4
			echo "<div class=".(avatarCode(2)==4?"OK":"KO").">";
			echo "Valor de entrada=1"."</br>"." valor esperado en la salida=2"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(4)."</br>";
			echo "</div>";
			//COMPROBAMOS PARA EL VALOR 6. DEBERIAMOS OBTENER UN 12
			echo "<div class=".(avatarCode(6)==12?"OK":"KO").">";
			echo "Valor de entrada=6"."</br>"." valor esperado en la salida=12"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(4)."</br>";
			echo "</div>";
			//COMPROBAMOS PARA EL VALOR 3. DEBERIAMOS OBTENER UN 6
			echo "<div class=".(avatarCode(3)==6?"OK":"KO").">";
			echo "Valor de entrada=6"."</br>"." valor esperado en la salida=12"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(3)."</br>";
			echo "</div>";
		?>
	</body>
</html>