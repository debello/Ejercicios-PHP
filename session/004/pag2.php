<?php
session_start();
if ($_SESSION['acceso']==="1"){
    
echo "acceso a datos privados.<br>El valor de SESSION secreto es: " . $_SESSION['secreto'];
echo "<br> Esta sesión será autodestruída una vez salga o recargue la página.<br>Le recomendamos volver al inicio <a href='004php.php'>AQUI</a>.";
    // clika aqui para salir
    // (hacer otro archivo donde haremos unset o session destroy)
    //session_destroy();
    //session_unset();
}
else {echo "no está en sesión";}
?>