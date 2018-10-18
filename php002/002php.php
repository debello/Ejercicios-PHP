<?php

$number = 438934;

echo "Divida la cadena $number separando por dos puntos (ex: 190239 -> 19:02:39) <br>"; 

$newnumber = // Obtenemos los dos primeros números de 
                // La primera parte del num (43)
                // El primer tercio (89)
                // El segundo tercio (34)
            // Y ponemos un espacio entre las tres partes
     substr($number, (strlen($number)*0.01), 2) . " " .
     substr($number, (strlen($number)*0.34), 2) . " " . 
     substr($number, (strlen($number)*0.67), 2) . "<br>";

echo "Primero dividimos el número en tres partes intercaladas con un espacio: $newnumber " . "<br>";

// Reemplazamos los espacios por dos puntos ":"
echo "Reemplazamos los espacios por ':' <br>" . preg_replace("/ /",":", $newnumber);

?>