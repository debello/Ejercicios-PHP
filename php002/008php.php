<?php

$cadena1 = "Casa";
$cadena2 = "Cata";
echo "La primera cadena seleccionada es: <strong>'$cadena1'</strong>" . "<br>";
echo "La segunda cadena seleccionada es: <strong>'$cadena2'</strong>" . "<br>";
echo "<br>";


if (strcmp($cadena1, $cadena2) == 0) {
    echo "Las cadenas son exactamente iguales";
}

else {

    for ($i = 0; $i < strlen($cadena1)-1; $i++) {

        if ($cadena1[$i] == $cadena2[$i]) {
            continue;
        }
        else {
            echo "La primera diferencia se encuentra en la posición: <strong>'$i'</strong> <br>";
            echo "En la primera cadena será el valor: <strong>'$cadena1[$i]'</strong><br>";
            echo "En la primera cadena será el valor: <strong>'$cadena2[$i]'</strong><br>";
        }

    }        
}

?>