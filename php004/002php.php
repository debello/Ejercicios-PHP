<?php
/**
Declare e inicialice o array cor así:
$cor = array('branco', 'verde', 'vermello', 'azul');
Debe mostrar como saída
* azul
* branco
* verde
* vermello
*/
$cor = array('branco', 'verde', 'vermello', 'azul');

echo "<strong>OPCION 1</strong><br>";
// Creamos un for para usar $i que incrementaré de 0 a 4
for ($i = 0; $i < sizeof($cor); $i++) {
    // Switch para escoger, en cada incremento de 0 a 4, qué imprimiremos
    switch ($i) {
        case 0:
            echo $cor[3] . "<br>";
            break;
        case 1:
            echo $cor[0] . "<br>";
            break;
        case 2:
            echo $cor[1] . "<br>";
            break;
        case 3:
            echo $cor[2] . "<br>";
            break;    
    }
}

// OPCION 2
echo "<br><br><strong>OPCION 2</strong><br>";
$corOrden = [3, 0, 1, 2]; // De 0 a 3, asignamos cada número al orden que usaremos

for ($i = 0; $i < sizeof($cor); $i++) {
    // Imprimimos el array cor en el orden (3, 0, 1, 2) el cual definimos anteriormente
    // en otro array ($corOrden)
    echo $cor[$corOrden[$i]] . "<br>";
}
?>