<?php
//De definicion
function contadorIncremental(){
    static $contador;
    echo $contador;
    $contador++;
}
?>
<html>
	<head>
		<title>AMBITO VARIABLES
		</title>
	</head>
	<body>
	    <div>
	        <?php
            //De ejecucion
            //echo $frase;
            contadorIncremental();
            contadorIncremental();
            contadorIncremental();
	        ?>
	    </div>
	</body>
</html>