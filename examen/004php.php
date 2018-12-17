<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<p> Introduzca numero para que se lo mostremos al revés <br> <strong> AVISO: Se quitarán los ceros de la izquierda, en caso de que existan</strong></p>

        <form action="" method="get"> 
            
            <input type="number" name="a"><br>
            
            <input type="submit"/>
    </form>
<?php 
// Con number nos cercionamos que hemos introducido un número



// Miramos de haber introducido al menos un dato en el formulario
if (isset($_GET['a'])){
    
// Obtenemos el valor del input "a" anteriormente introducido y le asignamos la variable $a para nuestro uso
    $a = $_GET['a'];
    if (!empty($a) && $a > 9) { // Si hemos insertado un dato que no esté vacío y sea mayor que 0...
        
        $aString = (string)$a; // Convertimos nuestro número en un "string" para usar strreve
        $b = strrev($a); // Le damos la vuelta
        echo "El número $a al revés es: " . ltrim($b, 0); 
        //ltrim para quitar los 0 de la izquierda: i.e. en 20 será 2 (en lugar de 02 que queda más feo)

    }
    else {     // Anunciamos cualquier error NECESITAMOS DOS O MAS CIFRAS

        echo "No se ha introducido número, el número es 0, el número es negativo o contiene una o menos cifras. Inténtelo de nuevo.";
    } 
    }
    
/**

  */  
?>
</body>
</html>
