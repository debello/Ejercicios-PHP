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
asort($europa);


    echo "<br> <strong>métdodo 1 for eache con valor y clave </strong> <br>" ;
foreach ($europa as $valor => $clave) {
    echo "A  capital de $valor é $clave <br>";
}

// OPTION DOS // no funciona!!!! linea 21
echo "<br> <strong>métdodo 2 forloop </strong> <br>" ;
$keys = array_keys($europa);
$values = array_values($europa);

for ($i = 0; $i < 4;$i++) {
    echo "A capital de $keys[$i] é $values[$i] <br>";
}

echo "<br> <strong>métdodo 3 for eaches </strong> <br>" ;

foreach ($keys as $b) {
    echo "echo a array keys " . $b . "<br>";
}
foreach ($values as $a) {
    echo "echo a array values " . $a . "<br>";
}
    
echo "echo values " . $values[1]  . "<br>";
echo "echo keys " . $keys[1]  . "<br>";

//OPTION 3

///????
echo key($europa);
// no funciona con echo key($europa[1]);


?>
