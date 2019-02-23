<?php
// Comparación de 2 strings de la MISMA longitud
$cadena1 = "Casa";
$cadena2 = "Cata";
echo "La primera cadena seleccionada es: <strong>'$cadena1'</strong>" . "<br>";
echo "La segunda cadena seleccionada es: <strong>'$cadena2'</strong>" . "<br>";
echo "<br>";

// strcmp compara dos strings
// Da 0 si ambos coinciden, -1 Si el primero posee un sólo un valor diferente
// o +1 si es el segundo string el que tiene un valor diferente en comparación
echo strcmp($cadena1, $cadena2);
if (strcmp($cadena1, $cadena2) == 0) {
    echo "Las cadenas son exactamente iguales";
}

else {
    // Repasamos ambas cadena elemento a elemento, comparándolos
    for ($i = 0; $i < strlen($cadena1)-1; $i++) {

        if ($cadena1[$i] == $cadena2[$i]) {
            continue;
        } // Si encontramos una diferencia imprimimos su posición y valor
        else {
            echo "La primera diferencia se encuentra en la posición: <strong>'$i'</strong> <br>";
            echo "En la primera cadena será el valor: <strong>'$cadena1[$i]'</strong><br>";
            echo "En la primera cadena será el valor: <strong>'$cadena2[$i]'</strong><br>";
        }

    }        
}

?>