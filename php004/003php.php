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
asort($europa); // Ordenamos alfabéticamente los valores (Capitales)


    echo "<br> <strong>métdodo 1 for each con valor y clave </strong> <br>" ;
foreach ($europa as $valor => $clave) {
    echo "A  capital de $valor é $clave <br>";
}


// OPTION DOS
echo "<br> <strong>métdodo 2 forloop </strong> <br>" ;

$keys = array_keys($europa); // Cogemos todas las claves del array $europa
$values = array_values($europa); // Cogemos todas los valores del array $europa

for ($i = 0; $i < 4;$i++) {
    echo "A capital de $keys[$i] é $values[$i] <br>";
}


?>
