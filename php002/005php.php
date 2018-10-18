<?php
/*
Extraia o nome de usuario dunha conta de correo electrónico
Exemplo de entrada : 'jose@exemplo.gal' --> Exemplo de saída : 'jose' 
*/

$ruta = "Asociacionmadrid@gmail.es";

$rutaArray = explode("@", $ruta);
echo "<strong>Método explode:</strong> " . $rutaArray[0] . "<br>";

$arrobaPos = strpos($ruta, "@");
echo "<strong>Método strpos + substr:</strong> " . substr($ruta, 0, $arrobaPos) . "<br>";

?>