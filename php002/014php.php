<?php

// Coger una cadena donde haya varios puntos (github.io.com) y escoger la primera, media // y ultima parte de forma separada, y las dos primeras y las dos ultimas

$frase = "hola.github.io";
echo strpos($frase, ".") . "<br>";
echo substr($frase, strpos($frase, "."), 1) . "<br>";

$fraseArray = explode(".", $frase);
echo $fraseArray[0] . "<br>";
echo $fraseArray[1] . "<br>";
echo $fraseArray[2] . "<br>";

?>