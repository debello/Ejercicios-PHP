<?php

/**
Messengizar el nombre: *__++***^^^¡¡¡'''PEpitoxx''''¡¡¡¡¡^^^^****_____+
Dado un nombre deberemos 'Messengizarlo' Osea escribirlo con alguna coletilla y también con símbolos distintos tanto en la izquierda como en la derecha del nombre
ie: Dado el nombre Pepe conseguir '*__++***^^^¡¡¡'''PEpitoxx''''¡¡¡¡¡^^^^****_____+'
*/

$nombre = "Pepe";
$nombre1 = "Pepe";
$prefijo = "__--++**^^!!";
$sufijo = strrev($prefijo); // invertimos el prefijo, el cual usaremos como sufijo

// Podemos poner stroupper para usar mayúsculas en todo el string
echo "<strong>Primer ejemplo posible: </strong>" . $prefijo . strtoupper($nombre) . $sufijo . "<br>";

$ito = "itoxxx";
    // Por cada [Longitud de Pep + itoxxx], empezando desde 3(Pep)...
    // Introducimos i t o x x x después de Pep
    for ($i = 3; $i < strlen($ito) + strlen('Pep'); $i++ ) {
        $nombre[$i] = ($ito[$i - 3]) . "<br>";

        }
echo "<strong>Nombre con itoxxx:</strong> $nombre <br><br>";

// ALTERNATIVA
// Insertamos i t o x x x en $nombre1, [3], justo después de p de Pep
$nombre1[3] = "i";
$nombre1[4] = "t";
$nombre1[5] = "o";
$nombre1[6] = "x";
$nombre1[7] = "x";
echo "<strong>Alternativa - Nombre con itoxxx añadido elemento a elemento: </strong>$nombre1 <br>";

// Sustituír letras (vocales) por otras (vocales mayúsculas)
$vocalesnombre = ["e", "i", "o"];
$vocalesMayus = ["E", "I", "O"];
$mayusMenus = str_replace($vocalesnombre, $vocalesMayus, $nombre);
echo "Nombre con las vocales Mayúsculas: " . $mayusMenus . "<br>";

// Juntando todo
echo "<br>Resultado final: <br>";
echo $prefijo . strtoupper($nombre) . $sufijo . "<br>";
echo $prefijo . $mayusMenus . $sufijo . "<br>";


?>