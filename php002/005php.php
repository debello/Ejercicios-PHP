<?php
/*
Extraia o nome de usuario dunha conta de correo electrónico
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'jose' 
*/

$ruta = "Asociacionmadrid@gmail.es";

// Dividimos la ruta por los elementos antes y después del @, imprimimos el primer elemento
$rutaArray = explode("@", $ruta);
echo "<strong>Método explode:</strong> " . $rutaArray[0] . "<br>";

// ALTERNATIVA
$arrobaPos = strpos($ruta, "@"); // Localizamos posición del @
// Substraemos desde el inicio hasta la posición del @
echo "<strong>Método strpos + substr:</strong> " . substr($ruta, 0, $arrobaPos) . "<br>";

?>