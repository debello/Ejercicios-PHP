<?php
/*
Extraia o nome do ficheiro dunha ruta
Exemplo de entrada : 'www.exemplo.com/public_html/index.php' --> Exemplo de saída : 'index.php' 

Pista extra --> Tamén se pode facer de xeito máis áxil coa función basename
*/


$ruta = "Home/Usuario/Carlos/Escritorio/Ciencia/Planetas.txt";
$ruta2 = pathinfo("Home/Usuario/Carlos/Escritorio/Ciencia/Planetas.txt");


echo "<strong>Usando basename:</strong> <br>" . basename($ruta) . "<br><br>";
echo "<strong>Usando pathinfo:</strong> <br>" . $ruta2["basename"] . "<br><br>";
echo "<strong>Usando método personal:</strong> <br>";
$trozos = explode("/", $ruta);
echo $trozos[sizeof($trozos)-1];

?>