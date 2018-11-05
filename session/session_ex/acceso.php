<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
if (strcmp($usuario,"james")==0 && strcmp($clave,"bond")==0)
{
	session_start();
	$_SESSION['acceso']="1";
	print "ok<br><br>";
}
echo "<a href='privado.php'>Las fotos más privadas de los dioses griegos...</a>";
?>