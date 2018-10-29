<?php

// Fusión de palabras
// Dadas 10 palabras, tendremos que fusionarlas entre ellas en pareja de 2
// por ejemplo: Casa, Coche, Bicicleta, Arbol... fusionaríamos Casa con Coche
// y Bicicleta con árbol


$casa = "casa";
$coche = "coche";

$bici = "bici";
$arbol = "arbol";

$mesa = "mesa";
$silla = "silla";

$estuche = "estuche";
$ordenador = "ordenador";

$botella = "botella";
$colegio = "colegio";

// Substraemos la primera parte de una palabra y la última parte de la otra
echo "<strong>$casa + $coche: </strong>" . substr($casa, 0, 2) . substr($coche, 2, 3) . "<br>"; // cache

echo "<strong>$bici + $arbol: </strong>" . substr($bici, 0, 2) . substr($arbol, 1, 4) . "<br>"; // birbol

echo "<strong>$mesa + $silla: </strong>" . substr($mesa, 0, 2) . substr($silla, 2, 3) . "<br>"; // mella

echo "<strong>$estuche + $ordenador: </strong>" . substr($estuche, 0, 4) . substr($ordenador, 4, 5) . "<br>"; // estunador

echo "<strong>$botella + $colegio: </strong>" . substr($botella, 0, 4) . substr($colegio, -3, 3) . "<br>"; // botegio


?>