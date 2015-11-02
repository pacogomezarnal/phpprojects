<?php
//Abrimos/reanudamos la sesion con la funcion session start
session_start();

//Comprobamos una variable abierta en la sesion
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>
<html>
    <head>
        <title>
            Uso Sesion en pagina 2
        </title>
    </head>
    <body>
        En la segunda reutilizamos la sesion, ya que el contador es <?=$_SESSION['count'];?>
        <br>
        <a href="index3.php">Vamos la tercera pagina</a>
    </body>
</html>