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
            <p>Introduzca la cantidad de Mb: </p>
            <input type="number" name="a"><br>
            
            <input type="submit"/>
    </form>
<?php 
// con type number controlamos que sólo insertamos números




// Miramos de haber introducido al menos un dato en el formulario
if (isset($_GET['a'])){
    
// Obtenemos el valor del input "a" anteriormente introducido y le asignamos la variable $a para nuestro uso
    $a = $_GET['a'];
    if (!empty($a) && $a > 0) { // Si hemos insertado un dato que no esté vacío y sea mayor que 0...
        // Creamos una variable $b donde multiplicamos $a (número de Mb) por 1024 (el valor de los kb por cada Mb)
        $b = $a * 1024 ;

        echo "La cantidad de $a Mb(s) son $b Kbs ";
        }
    // Anunciamos cualquier error
    else { echo "No se ha introducido número, el número es 0 o el número es negativo. Inténtelo de nuevo.";
         }
    }
    
/**
    BONUS POST Y GET
    Pasé el dato introducido por GET. La diferencia es que GET pasa los datos introducidos en la URL (podemos verlo en el link una vez introduzcamos los datos) y POST no.
    POST es más seguro cuando queremos pasar información confidencial como nombre y contraseña (al no aparecer en la URL una vez introducidas)
    GET se usa más para viajar entre diferentes páginas de una sola web
    En este caso GET está bien usado aunque podríamos usar POST sin problemas tampoco.
  */  
?>
</body>
</html>
