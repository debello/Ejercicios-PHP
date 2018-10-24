<?php

/*
Chop Chop ; rtrim etc cortar cosas
Messengizar el nombre: *__++***^^^¡¡¡'''PEpitoxx''''¡¡¡¡¡^^^^****_____+
Cambiar texto de contenido por palabras (gatificar), sin vocales.... etc
Coger una cadena donde haya varios puntos (github.io.com) y escoger la primera, media y ultima parte de forma separada, y las dos primeras y las dos ultimas
*/

$nombre = "Pepe";
$nombre1 = "Pepe";
$buengusto = "__--++**^^!!";

$gustoinvertido = strrev($buengusto);

echo $gustoinvertido . "<br>";

echo $buengusto . strtoupper($nombre) . $gustoinvertido . "<br>";

$nombre[3] = "ito" . "<br>";
echo $nombre . "<br>";
$ito = "itoxxx";

    for ($i = 3; $i < strlen($ito) +3; $i++ ) {
        $nombre[$i] = ($ito[$i - 3]) . "<br>";

        }
echo $nombre . "<br>";

// OTRA Forma de hacer lo anterior
$nombre1[3] = "i";
$nombre1[4] = "t";
$nombre1[5] = "o";
$nombre1[6] = "x";
$nombre1[7] = "x";
echo $nombre1 . "<br>";

// Sustituír letras (vocales) por otras (vocales mayúsculas)
$vocalesnombre = ["e", "i", "o"];
$vocalesMayus = ["E", "I", "O"];
$ificado = str_replace($vocalesnombre, $vocalesMayus, $nombre);
echo $ificado . "<br>";

// Juntando todo
echo $buengusto . strtoupper($nombre) . $gustoinvertido . "<br>";
echo $buengusto . $ificado . $gustoinvertido . "<br>";


?>