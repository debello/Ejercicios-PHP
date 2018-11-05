<?php

session_start();

if ($_SESSION['acceso'] = true) {
    echo "la session Acceso es verdadera. Click <a href='salir.php'>aqui</a> para salir"; ;
}
else { echo "ha habido un error, inténtelo de nuevo";}
?>