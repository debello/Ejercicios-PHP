<?php
session_start();
if ($_SESSION['acceso']=="1")
{
	session_destroy();
	echo utf8_encode("Has avandonado la página...");
	echo "<a href='index.html'>Volver al inicio</a>";
} else {
	print "lo siento, no hay sesión";
}

?>