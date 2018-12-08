<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<p> Calcula de Mb a Kb - CALCULADORA</p>

        <form action="" method="get"> 
            <p>Sepa si un número es par y/o divisible entre 5</p>
            <input type="number" name="a"><br>
            
            <input type="submit"/>
    </form>
<?php 



// Miramos de haber introducido al menos un dato en el formulario
if (isset($_GET['a'])){
    
// Obtenemos el valor del input "a" anteriormente introducido y le asignamos la variable $a para nuestro uso
    $a = $_GET['a'];
    if (!empty($a) && $a > 0) { // Si hemos insertado un dato que no esté vacío y sea mayor que 0...
        
        if ($a % 2 === 0) { // Si el número es divisible entre dos
            echo "el número $a es par"; // es par
            if ($a % 5 === 0) { // ADEMAS si el num dividido entre 5 da resto 0
                echo " y divisible entre 5"; // dicho numero es divisible entre 5
            }
        }
        else {
            echo "El número $a NO es par"; // Si el num NO es divisible entre dos, no es par
        }

    }
    else {     // Anunciamos cualquier error

        echo "No se ha introducido número, el número es 0 o el número es negativo. Inténtelo de nuevo.";
    } 
    }
    
/**

  */  
?>
</body>
</html>
