<?php

/** Cifrar un texto por defecto y explicarlo. Por ejemplo cambiar letras o vocales por números etc
Crear un proceso a la inversa para descifrarlo
*/

$frase = "El veloz murcielago hindu comia feliz cardillo y kiwi. La ciguena toca el saxofon detras del palenque de paja";

echo "<strong>Frase original: </strong> $frase <br>";

// Fijamos vocales minúsculas y mayúsculas y su respectiva "traduccion" a números
$vocalesMinus = "aeiou";
$vocalesMayus = "AEIOU";
$vocalesMinusCifr = "12345";
$vocalesMayusCifr = "67890";


for ($i = 0; $i < strlen($vocalesMinus); $i++) {
// Reemplazamos cada vocal de los strings anteriores por un número
    $frase = str_replace($vocalesMinus[$i], $vocalesMinusCifr[$i], $frase);
    $frase = str_replace($vocalesMayus[$i], $vocalesMayusCifr[$i], $frase);
    }
echo "<br><strong>Vocales minúsculas y mayúsculas cifradas: </strong> $frase <br>";

// Fijamos consonantes (sólo minúsculas)
$consoMinus = "bcdfghjklmnpqrstvwxyz";
$consoMinusCifr = "!ºª-$%&)=(¿*^Ç}][:;,";

for ($i = 0; $i < strlen($consoMinus); $i++) {
// Reemplazamos cada consonante del string anterior por un número
    $frase = str_replace($consoMinus[$i], $consoMinusCifr[$i], $frase);
    }

echo "<br><strong>Consonantes minúsculas y mayúsculas cifradas:</strong> $frase <br>";
    
    
// Descifrado (hacemos lo mismo a la inversa)
for ($i = 0; $i < strlen($consoMinus); $i++) {
    $frase = str_replace($consoMinusCifr[$i], $consoMinus[$i], $frase);
    
    
    }

echo "<br><strong>Desciframos consonantes:</strong> $frase";


for ($i = 0; $i < strlen($vocalesMinus); $i++) {
    
    $frase = str_replace($vocalesMayusCifr[$i], $vocalesMayus[$i], $frase);
    $frase = str_replace($vocalesMinusCifr[$i], $vocalesMinus[$i], $frase);
    }
echo "<br><strong>Desciframos vocales:</strong> $frase <br>";


?>