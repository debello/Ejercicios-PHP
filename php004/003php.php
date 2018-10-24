<?php
/**
Declare e inicialice o array euopa así:
$europa = array( "Italia"=>"Roma", "Luxemburgo"=>"Luxembourgo", "Bélxica"=> "Bruselas", "Holanda"=> "Amsterdam")
Debe mostrar como saída:
A  capital de Holanda é Amsterdam
A  capital de Bélxica é Bruselas
A capital de Luxemburgo é Luxemburgo
A  capital de Italia é Roma

Pista --> asort
*/
$europa = array("Italia"=>"Roma", "Luxemburgo"=>"Luxembourgo", "Bélxica"=> "Bruselas", "Holanda"=>"Amsterdam");
$test = [1, 2, 3];
echo $test[1] . " " . $europa[0];
asort($europa);

foreach ($europa as $valor => $clave) {
    echo "A  capital de $valor é $clave <br>";
}

// OPTION DOS // no funciona!!!! linea 21
echo "echo europa 1 " . $europa[1] . "<br>";

$values = array_values($europa);
foreach ($values as $a) {
    echo $a . "<br>";
}
    
echo "echo values " . $values[1]  . "<br>";
//OPTION 3

///????
echo key($europa);
// no funciona con echo key($europa[1]);


?>