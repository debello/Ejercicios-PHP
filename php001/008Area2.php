<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
// Obtenemos la cifra de a y b del html, asignamos variables a y b    
    $a = $_GET['a'];
    $b = $_GET['b'];

// Creamos una variable $c donde se calcula el área del triángulo rectángulo
    $c = ($a * $b) / 2;
    
    echo "El área de un triángulo rectángulo con catetos $a y $b es ", $c;
?>
</body>
</html>