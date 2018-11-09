<?php
/**
FUNCTION - REMOVES SELECTED DUPLICATED NUMBERS IN AN ARRAY
FUNCTION - BORRA UN NUMERO DUPLICADO ESCOGIDO DENTRO DE UN ARRAY
*/



// El array que usaremos
$numbors = [2, 5, 7, 62, 5, 42, 7, 52, 48, 5];
$uniqued = array_unique($numbors);
$numbors = [2, 62, 42, 52, 48];
print_r($uniqued);

?>