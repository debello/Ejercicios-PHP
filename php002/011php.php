<?php
/*
Chop Chop ; rtrim etc cortar cosas
Messengizar el nombre: *__++***^^^¡¡¡'''PEpitoxx''''¡¡¡¡¡^^^^****_____+
Cambiar texto de contenido por palabras (gatificar), sin vocales.... etc
Coger una cadena donde haya varios puntos (github.io.com) y escoger la primera, media y ultima parte de forma separada, y las dos primeras y las dos ultimas
*/

//1
// Dado una serie de números '&&\t\r1111247331111\t\n&&' queremos eliminar todos los pares, quedándonos con los números impares del medio 7 y 5
// uso de TRIM, CHOP, Preg_Replace
// pistas: trim, preg_replace...

$siete = "\r\r&&\t\r111124779331111\t\n&&\r\r";
$num = 1234;
$string = "hola";


$siete2 = trim($siete);
echo "esto es con trim " . trim($siete) . "<br>"; // quita \r\n de ambos lados

$siete3 = ltrim($siete2, "&"); //quita & de delante
echo "esto es ltrim (sobre el anterior) " . $siete3 . "<br>";

$siete4 = rtrim($siete3, "&"); //quita & de atrás
echo "esto es rtrim (sobre el anterior) " . $siete4 . "<br>";

$siete5 = preg_replace("/[1-68-9]/", "", $siete4); //quita números del 1 al 6 en el string y del 8 al 9
echo "esto es preg_replace quitando numeros excepto los sietes: " . $siete5 . "<br>";

$siete6 = preg_replace('/\D/', '', $siete);
echo "esto es pre_replace quitando \t \r etc de cualquier parte " . $siete . "<br>";

$siete6 = str_replace("\r\r&&\t\r111124", "", $siete); // reemplaza dichos elementos por espacios
echo "esto es str_replace " . $siete6 . "<br>";

echo "una fantasía en bucle 'infinito' " . str_replace("\r\r&&\t\r", "", str_replace("1", "", str_replace("2", "", str_replace("4", "", str_replace("9", "", str_replace("3", "", str_replace("&&\r\r", "", $siete))))))) . "<br>";

$siete7 = chop($siete, "\t\n&&\r\r"); //quita & de atrás
echo "esto es Chop(rtrim) de la parte derecha" . $siete7 . "<br>";





?>