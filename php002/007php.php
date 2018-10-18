<?php
// Convertir el string en un ARRAY
// Cambiar el primer valor [0] osea primera "palabra" en otra
// Reconvertir el ARRAY en string de nuevo

$cadena = "Este es un lapiz muy bonito";
$cadenaArr = explode(" ", $cadena);
foreach ($cadenaArr as $test => $test2){
    echo $test . " => " . $test2. "<br>";
}
$cadenaArr[0] = "Aquel"; // Palabra a insertar con un $_GET
echo "<br>";
    
$cadenaAgain = implode(" ", $cadenaArr);

echo $cadenaAgain; 
echo "<br>";



// Localizar primera "palabra" ?????
// INTRODUZCA LA PRIMERA PALABRA QUE QUIERA CAMBIAR
// echo str_replace("Este", "Aquel", $cadena); BASADOI NE ESTO
// PERO ESTO CAMBIA todos los Este del string por Aqueles

echo str_replace("Este", "Aquel", $cadena);

    




?>