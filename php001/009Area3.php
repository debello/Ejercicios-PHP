<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 

        $a = $_GET['a'];
        $b = $_GET['b'];

// Si uno de los valores está vacío (no se escribió un numero), imprimimos el siguiente texto
    if (empty($a) || empty($b)) {
        echo "Un dato no ha sido insertado. Por defecto, te informamos que el área de un cuadrado 10x10 es 100.";
    }
    
// Si ningún valor queda vacío (se rellenó ambas casillas...)
        else {

// Creamos una función con los argumentos (las variables sin declarar) $x e $y 
            function triArea($x, $y) {

// Dentro se calcula el área como en el ejercicio anterior y se devuelve (return) el valor resultante ($c)
            $c = ($x * $y) / 2;
            return $c;
        }
// En el echo usamos la función triArea() y dentro ponemos los argumentos $a y $b que obtendríamos en las primeras líneas de código, desde el formulario
        echo "El área de un triángulo rectángulo con catetos $a y $b es ", triArea($a, $b) . ".";

    }
   
    
?>
</body>
</html>