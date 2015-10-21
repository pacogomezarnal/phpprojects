<html>
	<head>
		<title>PETICION FORMULARIO
		</title>
	</head>
	<body>
	    <?php
	        if(!sizeof($_GET)==0)
	        {
	            echo "El nombre de la persona es: ". $_GET['nombre'];
	            echo '<br>';
	            echo "Los apellidos de la persona es: ". $_GET['apellidos'];
	            echo '<br>';
	            echo "Su sexo es: ". $_GET['sexo'];
	        }
	        var_dump($_POST);
	        if(!sizeof($_POST)==0)
	        {
	            echo "El nombre de la persona es: ". $_POST['nombre'];
	            echo '<br>';
	            echo "Los apellidos de la persona es: ". $_POST['apellidos'];
	            echo '<br>';
	            echo "Su sexo es: ". $_POST['sexo'];
	        }
	    ?>
	</body>
</html>