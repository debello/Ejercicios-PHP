<?php

/**
Mostre
Mostre os números entre 200 e 250 divisbles entre catro, sen usar bucles
Saída: 200,204,208,212,216,220,224,228,232,236,240,244,248
Pista: implode
*/

$num1 = 200;
$num2 = 250;
$array = [];


// for donde i = 200; i < 251
// si i es divisible entre 4...
// Insertarmos cada valor de i en un array
for ($num1; $num1 < $num2 - 1; $num1++) {
    if (($num1 % 4 === 0)) {
        // echo "<br> $num1 <br>";
        $array[] += $num1;
    }
   
}

// TEST TEST TEST
echo "<br> TEST ARRAY: <br> $array[0] <br>";
echo "<br> $array[1] <br>";
echo "<br> $array[10] <br>";

// OPTION 2
//
$num3 = 200;
$num4 = 250;
$array2 = [];
// Insertamos todos los números del 200 al 250 en un array
// Enseñamos sólo los divisibles
for ($num3; $num3 < $num4 - 1; $num3++) {
        $array2[] += $num3;
    }
for ($i = 0; $i < sizeof($array2) - 1; $num3++) {
    if ($array[$i] % 4)
    
        
//$array2exploded = explode();
    
    
    
// OPTION 3

$num = "200,204,208,212,216,220,224,228,232,236,240,244,248";
//explide

// OPTION 4
$num5 = 200;
$num6 = 250;
$string = '';
for ($num5; $num5 < $num6 - 1; $num5++) {
    if (($num5 % 4 === 0)) {
        $string .= ($num5  . ", ") ;
    }}
echo "<br> TEST \$string : $string";

    
// OPTION 5
echo implode(",", range(200, 250, 4));
?>