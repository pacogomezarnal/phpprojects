<?php
require_once('lib/basedatos.php');

$db = new BaseDatos();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <?php echo $db->usuariosHTML();?>
    </body>
</html>