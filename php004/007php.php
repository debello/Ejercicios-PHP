<?php
/**
FUNCTION - REMOVES SELECTED DUPLICATED NUMBERS IN AN ARRAY
FUNCTION - BORRA UN NUMERO DUPLICADO ESCOGIDO DENTRO DE UN ARRAY
*/



// El array que usaremos
$numbors = [2, 5, 62, 5, 42, 52, 48, 6, 6, 6, 6, 7, 5, 10, 10, 5];
echo "<br><strong> Aquí tenemos el array principal </strong><br>";
foreach ($numbors as $n) {
    echo " $n ";
}

// Array para el futuro. Registraremos en qué partes del array localizamos los 7.
$location = [];

function ReducirDuplicadoSeleccionado($x, &$numbers){
    // Invocamos el array anterior
    global $location;

    // Localizamos el lugar del 7 y lo almacenamos en el array anterior
    array_push($location, array_search($x, $numbers));
    
    // Luego borramos el 7 (empty)
    unset($numbers[$location[sizeof($location)-1]]);
    
    
    // Quedam más 7? Si? VOLVEMOS al inicio de la función
        if (in_array("$x", $numbers) ===  true) {
            ReducirDuplicadoSeleccionado($x, $numbers);
        }
    // No? Reinsertamos el último 7 que hemos quitado.
        else {          
            $numbers[$location[sizeof($location)-1]] = $x;
        }

    ksort($numbers);
    return $numbers;
    
}

//Introducimos todo lo obtenido de la función en $new
$new = (ReducirDuplicadoSeleccionado(5, $numbors));
echo "<br><strong> Aquí tenemos el resultado: </strong> <br>";
foreach ($new as $n) {
    echo " $n ";
}

// No está perfecto! Sigue teniendo la clave 3 (donde había un 7) unexistente
// Recolocamos $new en una nueva variable $newo para que las claves cuenten de de 0 a 5 sin que falte ningun número

foreach ($new as $n) {
    $newo[] = $n;
}
echo "<br>";
echo "<br>Esta es \$new (el <strong>Resultado</strong>), cuya <strong>clave 3 no existe: </strong>";
print_r($new);
echo "<br>Esta es \$newo, con las claves ordenadas de 0 a 5: ";
print_r($newo);

    
// NOTA: Probablemente haya una forma más fácil de hacerlo...

?>