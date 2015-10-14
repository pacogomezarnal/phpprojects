<?php
    function foo($variable)
    {
        echo "Función de ejemplo que muestra la variable: ".$variable."<br>";
    }
   function imprimirColores($variable)
    {
        for ($i = 0; $i < count($variable); $i++) {
			echo "El valor de la posicion $i es ".$variable[$i]."<br>";
		}
    }
    function imprimirValor($variable=5){
        echo "El valor de la variable es: ".$variable."<br>";
    }
    
    function convierteMayusculas($frase){
        return strtoupper($frase);
    }
    
?>
<html>
	<head>
		<title>FUNCIONES DEFINIDAS POR EL USUARIO
		</title>
	</head>
	<body>
	    <div>
	        <?php
	            foo(3);
	            foo("Paco");
			    //El ejemplo mas sencillo de array es un array sin claves
			    $array_colores=array("rojo","verde","azul");
			    imprimirColores($array_colores);
			    //Ejemplo con argumentos predeterminados
			    imprimirValor(3);
	            imprimirValor("Paco");
	            imprimirValor();
	            //Ejemplo de devolucion
	            echo convierteMayusculas("Este es un ejemplo de frase");
	        ?>
	    </div>
	</body>
</html>