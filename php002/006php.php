<?php

$ruta = "Asociacionmadrid@gmail.com";

// Desde la posición -3 recoge los tres siguiente números (serían los tres últimos)
echo substr($ruta, -3, 3) . "<br>"; // TEST[!!!!!!!!!]
$subsRuta = substr($ruta, -3, 3) . "<br>";
// Quitamos el punto (en caso de que haya p.ej cuando la coletilla tiene menos de 3 letras, @gmail.es)
echo str_replace(".", "", $subsRuta);

?>