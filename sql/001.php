<?php

/**
BBDD en Mysql con PHP

https://www.youtube.com/watch?v=lL8_bL24xd4&index=38&list=PLU8oAlHdN5BkinrODGXToK9oPAlnJxmW_

Insertando datos de artículos en myphpadmin.
Intento que la primera columna (SECCION etc) no sea una columna más de datos

*/


require("datos.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

$consulta= "SELECT * FROM arti";

$resultados = mysqli_query($conexion, $consulta);

mysqli_set_charset($conexion, "utf8");

while ($fila=mysqli_fetch_row($resultados)) {

// (`SECCIÓN`, `NOMBRE ARTÍCULO`, `FECHA`, `PAÍS DE ORIGEN`, `PRECIO`)
foreach ($fila as $k ) {
    echo $k . ", ";
}
    echo "<br>";

   
}

mysqli_close($conexion);
?>