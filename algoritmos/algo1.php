<?php
/**
 * Ordenar los valores de la siguiente cadena:
 * $ex = [1 => 2, 3 => 4, 5 => 2]
 * en
 * $ex2 = [2 => (1, 5), 3 => 4];
 */

$ex = [1 => 2, 3 => 4, 5 => 2];
/*
echo $ex[0] . "<br>";
echo $ex[0][1] . "<br>";
echo $ex[1][0] . "<br>";

foreach ($ex as $k => $v) {
    echo $k , $v . "<br>";
}
*/


$exKeys = array_keys($ex);
$exValues = array_values($ex);

echo $exKeys[0] . "<br>";
echo $exKeys[1] . "<br>";
echo $exKeys[2] . "<br>";
echo "<br>";
echo $exValues[0] . "<br>";
echo $exValues[1] . "<br>";
echo $exValues[2] . "<br>";
$exSize = sizeof($ex);
echo "<br> esto es el tamaño del array $exSize <br>";
/* 
Escogemos 3 como el size porque de lo contrario cuando i sea 0
a será 0 y cuando i sea 1 a será 0... entonces no 'arrancará'
y para cuando lo haga i será 2 y no lo podremos comparar $a con el
siguiente valor 
todo: aclarar la explicación
*/
for ($i = 0; $i < 3; $i++){ 
    for ($a = 0; $a < $i; $a++){
        if ($exValues[$a] === $exValues[$i]) {
            echo "Hemos insertado un valor<br>";
            $exArray[] = $exValues[$a];
            /*
            $exArray[$a] = $exKeys[$a];
            $exArray[$a] = $exKeys[$i];
            */
        }
    }
}
foreach ($exArray as $k => $v) {
    echo $k , $v . "<br>";
}


?>