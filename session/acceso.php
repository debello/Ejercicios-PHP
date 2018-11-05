<?


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

<body>

<?php
echo "<br>Probando el echo de nuestra cookie: " .  $_COOKIE['nombre'];
    echo "<br><strong>Probando el echo de WEB COOKIE: </strong>" .  $_COOKIE['last_visit'];

echo "<br>Probando el echo de nuestra cookie: " .  $_COOKIE['nombre1'];

session_start();

if ($_SESSION['acceso'] = true) {
    echo "la session Acceso es verdadera. Click <a href='salir.php'>aqui</a> para salir"; ;
}
else { echo "ha habido un error, inténtelo de nuevo";}
?>
    
    </body>
</html>