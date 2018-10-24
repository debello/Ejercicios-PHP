<?php

/*
Cadeas 1
a) transforme unha cadea en maiúsculas
b) transforme unha cadea en minúsculas
c) converte a primeira letra da oración en maiúscula
d) converte a primeira letra de cada palabra da oración a maiúsculas
*/


$a = "hola buenos dias";
// Para pasar a mayúsculas usaremos 'strtoupper', para minúsculas 'strtolower'
echo "a) " . strtoupper($a) . "<br>";
echo "b) " . strtolower($a) . "<br>";
// Para ucwords, pone la primera letra de cada palabra en mayúscula PERO
// si usamos un delimitador (\n en este caso) sólo aplicará la mayúscula cada vez que encuentre dicho delimitador (cada nueva linea).
echo "c) " . ucwords($a, "\n") . "<br>";
echo "d) " . ucwords($a) . "<br>";

?>