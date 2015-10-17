<?php
    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
    }else{
         $nombre="No hay nombre definido";
    }
    $apellidos=$_GET["apellidos"];
?>
<html>
	<head>
		<title>GET
		</title>
	</head>
	<body>
        <?php
            echo "Nombre: ". $nombre . "<br>";
            echo "Apellidos: ". $apellidos . "<br>";
        ?>
	</body>
</html>