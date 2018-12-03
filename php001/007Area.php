<?php 
    
// Obtengo el número insertado en a y b del html, les asigno una variable a y b
    $a = $_GET['a'];
    $b = $_GET['b'];

// Los multiplico en la misma frase del echo (base x altura)
    echo "El área de un rectángulo con base $a cm y altura $b cm es ", $a*$b, " cms cuadrados";
?>
