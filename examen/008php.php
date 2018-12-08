<?php
$arrayasociativo = array("Brais"=>"27","Antón"=>"18","Maruxa"=>"36");


/**
a) ascendentemente por valor --> asort
b) ascendentemente por clave  --> ksort
c) descendentemente por valor --> arsort
d) ascendentemente por clave --> krsort
*/
asort($arrayasociativo);
echo "<br> Después de usar asort el resultado es: <br>";
foreach ($arrayasociativo as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}

arsort($arrayasociativo);
echo "<br> Después de usar arsort el resultado es: <br>";
foreach ($arrayasociativo as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}

ksort($arrayasociativo);
echo "<br> Después de usar ksort el resultado es: <br>";
foreach ($arrayasociativo as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}
krsort($arrayasociativo);
echo " <br> Después de usar krsort el resultado es: <br>";
foreach ($arrayasociativo as $value => $clave) {
    echo $value . "=>" . $clave . "<br>";
}




?>