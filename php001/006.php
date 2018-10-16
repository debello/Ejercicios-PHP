<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 

// Obtenemos el valor del input "a" anteriormente introducido y le asignamos la variable $a para nuestro uso

    $a = $_GET['a'];

// Creamos una variable $b donde multiplicamos $a (número de pesetas) por 0.006 (el valor de un euro por peseta)
    $b = $a * 0.006 ;
    
    echo "La cantidad de $a peseta(s) son $b euros ";
      
?>
</body>
</html>