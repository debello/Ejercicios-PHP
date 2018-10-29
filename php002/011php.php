<?php

// EJERCICIO 1 
// Dado una serie de números '\r\r&&\t\r111124779331111\t\n&&\r\r' queremos eliminar todos los pares, quedándonos con los 77 del medio
// pistas: trim, preg_replace...

$siete = "\r\r&&\t\r111124779331111\t\n&&\r\r";


$siete2 = trim($siete);
echo "esto es con trim para quitar los \\r de izquierda y derecha: " . trim($siete) . "<br>"; // quita \r\n de ambos lados

$siete3 = ltrim($siete2, "&"); //quita & de delante
echo "esto es ltrim (sobre el anterior) " . $siete3 . "<br>";

$siete4 = rtrim($siete3, "&"); //quita & de atrás
echo "esto es rtrim (sobre el anterior) " . $siete4 . "<br>";

$siete5 = preg_replace("/[1-68-9]/", "", $siete4); //quita números del 1 al 6 en el string y del 8 al 9
echo "<strong> esto es preg_replace quitando numeros excepto los sietes: </strong>" . $siete5 . "<br><br>";


// ALTERNATIVA
$siete6 = preg_replace('/\D/', '', $siete);
echo "esto es pre_replace quitando \\t \\r etc de cualquier parte " . $siete . "<br>";

$siete6 = str_replace("\r\r&&\t\r111124", "", $siete); // reemplaza dichos elementos por espacios
echo "esto es str_replace para quitar TODA la parte izquierda " . $siete6 . "<br>";

$siete7 = chop($siete, "\t\n&&\r\r/"); //quita & de atrás
echo "esto es Chop(rtrim) de la parte derecha" . $siete7 . "<br>";

echo "<strong>Un código largo con str_replace For Fun pero alternativa válida:</strong> " . str_replace("\r\r&&\t\r", "", str_replace("1", "", str_replace("2", "", str_replace("4", "", str_replace("9", "", str_replace("3", "", str_replace("&&\r\r", "", $siete))))))) . "<br><br>";

// NOTA [!]
// Pongo todos estos ejemplos para ver que es posible abrirse camino 
// quitando X elementos de la izquierda y derecha incluso a la vez
// y para ver muchas alternativas como solución al ejercicio

?>