<?php

$cadena = "Este es un lapiz muy bonito";

// Convertimos la string anterior en un array [Este, es, un, lapiz, muy, bonito]
$cadenaArr = explode(" ", $cadena);

// Sustituímos el primer elemento (Este) por Aquel
$cadenaArr[0] = "Aquel"; // 
echo "<br>";

// Reconvertimos en String otra vez
$cadenaAgain = implode(" ", $cadenaArr);

echo "<strong>Método Array explode-implode: </strong>" . $cadenaAgain; 
echo "<br>";


///// ALTERNATIVA
// Reemplazar Este por Aquel (Se cambiaría todos los Estes de la frase por Aqueles)
echo "<strong>Método str_replace: </strong>" . str_replace("Este", "Aquel", $cadena);

    




?>