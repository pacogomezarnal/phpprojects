<?php
//Destruimos la sesion
session_destroy();
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
        En la tercera hemos destruido incoorrectamente la sesion, el contador es <?=$_SESSION['count'];?>
        <br>
        <a href="index4.php">Vamos la ultima pagina</a>
    </body>
</html>