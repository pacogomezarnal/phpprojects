<?php
    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
    }else{
         $nombre="No hay nombre definido";
    }
    if(isset($_GET["nombre"])){
        $apellidos=$_GET["apellidos"];
    }else{
         $apellidos="No hay apellido definido";
    }
?>
<html>
	<head>
		<title>GET
		</title>
	</head>
	<body>
	    <?php
	        if(!isset($_GET["nombre"])){
	    ?>
            <a href="index2.php?nombre=Paco&apellidos=Gómez Arnal">Link a la segunda pagina</a>
        <?php
	        }else{
                echo "Nombre: ". $nombre . "<br>";
                echo "Apellidos: ". $apellidos . "<br>";
	        }
        ?>
	</body>
</html>