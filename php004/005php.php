<?php

$array=array("Sofia"=>"31",
             "Jacobo"=>"41",
             "William"=>"39",
             "Raul"=>"40");
/**
a) ascendentemente por valor --> asort
b) ascendentemente por clave  --> ksort
c) descendentemente por valor --> arsort
d) ascendentemente por clave --> krsort
*/
asort($array);
echo "<br> Después de usar asort el resultado es: <br>";
foreach ($array as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}
ksort($array);
echo "<br> Después de usar ksort el resultado es: <br>";
foreach ($array as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}
arsort($array);
echo "<br> Después de usar arsort el resultado es: <br>";
foreach ($array as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}
krsort($array);
echo " <br> Después de usar krsort el resultado es: <br>";
foreach ($array as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}

?>