<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:index.html");
	exit;
}
echo utf8_encode("Bienvenido a la página privada de los dioses...");
echo "<a href='salida.php'>Salir del sistema</a>";
?>