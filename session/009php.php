<?php

$dni = 12345678;

$divisor = $dni / 23;

$noDecimals = floor($divisor);
$dniDeci = $noDecimals * 23;
$resto = $dni - $dniDeci;
$hola = 
$letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

echo "dni número $dni <br>";
echo "<br>divisor: " . $divisor . "<br>";
echo "nodecimals: " . $noDecimals . "<br>";
echo "nodecimals * 23: $dniDeci";
echo "<br>resto " . $resto ."<br>";



echo "La letra de $dni es " . $letras[$resto];

echo "<br><br><strong>OPCION 2</strong><br>probando a buscar el resto:" . $dni % 23 . "<br>";

$resto2 = $dni % 23;

echo "La letra de $dni es " . $letras[$resto2];




?>