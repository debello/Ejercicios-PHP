<?php

$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$a3 = $_GET['a3'];
$a4 = $_GET['a4'];
$a5 = $_GET['a5'];
$a6 = $_GET['a6'];
$a7 = $_GET['a7'];
$a8 = $_GET['a8'];
$a9 = $_GET['a9'];
$a10 = $_GET['a10'];

// Después de obtener los 10 input (números) escogidos por el cliente, los añadimos a un array llamado $num
$num = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];

if (in_array("", $num)) { 
    echo "valor no introducido";
    }
else {
// Imprimimos los 10 números
for ($i = 0; $i<10; $i++) {


// Si el num máximo del los 10 del array $num coincide con el $num que se está imprimiendo en este momento ($num[$i])...
// Imprime "Es el máximo" junto a dicho numero
    if (max($num) === $num[$i]){
          echo $num[$i] . " Es el máximo <br>";  
        }

// Lo mismo que antes con el mínimo
    else if (min($num) === $num[$i]){
          echo $num[$i] . " Es el mínimo <br>";  
        }

// Si no cumple estas condiciones (el número a imprimir no es ni max ni min) se imprime el número sin ninguna coletilla
    else {
       echo $num[$i] . "<br>";
    }
}
}
    


?>