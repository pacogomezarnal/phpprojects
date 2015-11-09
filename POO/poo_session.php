<?php
	include('Jugador.php');
	//Abrimos/reanudamos la sesion con la funcion session start
    session_start();
    //Comprobamos si realizamos la accion de crear el Jugador
    if(isset($_POST['jugador'])){
        //Comprobamos un objeto creado en la sesion
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNombre($_POST['nom']);
          //Inicializamos al jugador
          $_SESSION['jugador'] = $jugador1;
        }
    }
    //Comprobamos un objeto creado en la sesion
    if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        $jugador1->puntos++;
    }

?>
<html>
	<head>
		<title>POO SESSION
		</title>
	</head>
	<body>
	    <div>
    	    <h3>FORMULARIO DE JUGADOR</h3>
    		<form action="poo_session.php" method="post">
    		    <input type="hidden" name="jugador">
    			Nombre:<br>
    			<input type="text" name="nom">
    			<br>
    			Apellido:<br>
    			<input type="text" name="apell">
    			<br><br>
    			<input type="submit" value="Enviar">
    		</form>
		</div>
		<div>
		    <h3>JUGADOR CREADO</h3>
		    <?php
		        if(isset($jugador1)){
		    ?>
	            El jugador con nombre <?=$jugador1->getNombre()?> tiene <?=$jugador1->puntos?> puntos
	       <?php
		        }else{
	       ?>
	           No hay jugadores definidos
	       <?php
		        }
	       ?>
		</div>
	</body>
</html>