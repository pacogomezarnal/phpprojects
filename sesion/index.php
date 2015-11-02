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
            Uso Sesion
        </title>
    </head>
    <body>
        <?=$_SESSION['count'];?>
        <br>
        <a href="index2.php">Vamos a otra pagina</a>
    </body>
</html>