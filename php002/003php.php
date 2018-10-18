<?php

/*
Comprobe se unha cadea está contida dentro doutra cadea
Exemplo de entrada : 'A galiña azul salta sobre o seu niño' --> Comprobas se conten a palabra ‘salta’
*/

$maxicadena = "A galiña azul salta sobre o seu niño";
$minicadena = "a";

// Pasamos las variables anteriores a una función. Esto es para evitar 'Warnings' más adelante
function check ($maxincadena, $minicadena) {
    // Usamos strpos para saber en qué posición está $minicadena respecto a $maxicadena
    $strcheck = strpos($maxicadena, $minicadena);
    return $strcheck;
 }

echo "Está '$minicadena' contenida en la cadena '$maxicadena' ? <br>"; 
    // Capturamos cualquier error al no introducir datos, introducir NULL o ""
if (!$maxicadena || !$minicadena) {
    echo "Error! Vuelva a revisar los valores introducidos.";
}
    // Si todo va bien, seguimos
else { // Si nuestra función nos proporciona un número mayor o igual que 0...
        // el @ antes de la función ignora cualquier Warning (en este caso sería que $maxicadena o $minicadena no tuviesen valores)
    if (@check($maxicadena, $minicadena) >= 0) {
        echo "<strong>Si</strong>. Concretamente en la posición " . strpos($maxicadena, $minicadena);
    }
    
    else {
        echo "<strong>No</strong>.";
    }
}

?>