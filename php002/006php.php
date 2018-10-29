<?php

$ruta = "Asociacionmadrid@gmail.com";

// Desde la posición -3 recoge los tres siguiente números (serían los tres últimos)
echo "<strong>Método con substr: </strong>" . substr($ruta, -3, 3) . "<br>"; //
$subsRuta = substr($ruta, -3, 3) . "<br>";
// Quitamos el punto (en caso de que haya p.ej cuando la coletilla tiene menos de 3 letras, @gmail.es)
echo "<strong>Alternativa con str_replace: </strong>" . str_replace(".", "", $subsRuta);

?>