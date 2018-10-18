<?php

$ruta = "Asociacionmadrid@gmail.es";

// Buscamos la posición del @ (Pues después de éste siempre viene el dominio)
$arrobaPos = strpos($ruta, "@");
// Apuntamos el la longitud de nuestra ruta
$tamañoRuta = strlen($ruta);


// con subtrs escogemos DESDE la posición de nuestro @
// y la cantidad de (tamaño ruta - posición del @) = osea todas las posiciones después del @ hasta el final de nuestra cadena

// el +1 de $arrobaPos es para no añadir el @ de @gmail.es en el DESDE 
echo "<strong>Método strpos + substr:</strong> " . substr($ruta, $arrobaPos+1, ($tamañoRuta - $arrobaPos)) . "<br>";

?>