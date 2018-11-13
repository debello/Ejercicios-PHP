<?php
/**
FUNCTION - REMOVES SELECTED DUPLICATED NUMBERS IN AN ARRAY
FUNCTION - BORRA UN NUMERO DUPLICADO ESCOGIDO DENTRO DE UN ARRAY
*/



// El array que usaremos
$numbors = [2, 5, 62, 5, 7, 42, 7, 7, 52, 48, 6, 6, 6, 6, 7, 5, 10, 10, 7, 5];
echo "<br><strong> Aquí tenemos el array principal </strong><br>";
foreach ($numbors as $n) {
    echo " $n ";
}
echo "<br>";

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


    
// NOTA: Probablemente haya una forma más fácil de hacerlo...




// OPTION 2 :

$num2 = [2, 5, 62, 5, 7, 42, 7, 7, 52, 48, 6, 6, 6, 6, 7, 5, 10, 10, 7, 5];

function BorrarDuplicado($x, $array) {
// La primera repetición del número deseado (Esta NO la borraremos)
$firstDuplicate = array_search("$x", $array);
$num2Length = (count($array));


for ($i = 0; $i < $num2Length; $i++){
    // Si los elementos del array NO son 7 ni es la primera repetición del 7, los quitamos
     if ($array[$i] === $x && $i != $firstDuplicate){
        unset($array[$i]);
     }
}
    return $array;
}
$num2Limpio = BorrarDuplicado(5, $num2);

echo "<br> <br> <strong>OPCION 2</strong>: <br>";
foreach ($num2Limpio as $l) {
    echo "$l ";
}


?>