<?php
//Abrimos/reanudamos la sesion con la funcion session start
session_start();

//Comprobamos una variable abierta en la sesion
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
//Destruimos la sesion y todas las variables
session_destroy();
?>
<html>
    <head>
        <title>
            Uso Sesion en pagina 4
        </title>
    </head>
    <body>
        En la ultima hemos destruido la sesión previo a la reapertura, el contador es <?=$_SESSION['count'];?>
        <br>
        <a href="index.php">Vamos la primera pagina</a>
    </body>
</html>