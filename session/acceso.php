<?
Probando el echo de WEB COOKIE: 2018-11-05T20:46:15+01:00
Probando el echo de WEB $last : 2018-11-05T20:46:15+01:00
Probando el echo de WEB $current: 2018-11-05T20:46:18+01:00

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