<?php
/**
Investiga qué é JSON
Explica que fai o seguinte código:
*/



function w3rfunction($value,$key) // Simple función que hace eco de una clave y valor
{
echo "$key : $value"."\n";
}


// Esta es una variable codificada en JSON
$a = '{"Title": "PHP Unit",
"Author": "Sebastian Bergmann",
"Detail":
{ 
"Publisher": "Autoedicion"
 }
  }';


$j1 = json_decode($a,true); // Este método convierte la variable anterior en una nueva con lenguaje PHP

// Este array (de PHP) aplica la función 'w3rfunction' a cada elemento del array $j1
// Como la función nuestra clave y valor del parámetro insertado, mostrará el de cada elemento de $j1
array_walk_recursive($j1,"w3rfunction");



?>