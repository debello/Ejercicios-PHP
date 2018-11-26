<?php

$nom = $_POST['nombre'];
$pass = $_POST['pass'];

if (strcmp($nom,"Carlos")==0 && strcmp($pass,"123456")==0) {
	session_start();
	$_SESSION['acceso']="1";
    $_SESSION['secreto'] = 'Sesión secreta! <a href="https://www.youtube.com/watch?v=2W_G3xmSGfo"> Clica para el secreto</a>';
    
	print "Entraste en sesión<br><br>";
    echo "Siga avanzando en <a href='pag2.php'> SIGUIENTE.</a>";
}
else {
    echo "No has entrado en la sesion, pruebe otra vez en <a href='004php.php'>VOLVER</a>";
}


?>