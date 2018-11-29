<?php
/**
    Insertar varios números. Enseñar la cantidad de números insertados, media de los pares y el mayor de los impares cuando introduzimos un número negativo, 0 o el formulario vacío.
*/

session_start(); // Iniciamos sesión para usar la var $_SESSION cuando deba

// Si hemos introducido algún valor o algún valor ha sido introducido con anterioridad
if (isset($_POST['hola']) || isset($_SESSION['sesionex'])){
    // Si el valor introducido está vacío o es menor que 0 lo convertimos en 0
    // (Así no contará para la media)
    if (empty($_POST['hola'])  || $_POST['hola'] < 0 || $_POST['hola'] === '' || $_POST['hola'] === null || $_POST['hola'] === 0) {
        $_POST['hola'] = 0;
    } 
    
    // Contamos cuántos elementos (números introducidos) tiene nuestra variable
    // de sesión
    $pos = count($_SESSION['sesionex']);
    $nom = $_POST['hola'];
    // Cada elemento introducido irá a nuestra variable de sesión.
    // Cuantos más elementos introducimos, mayor es la posición y así iremos asignándolos
    $_SESSION['sesionex'][$pos] = $nom;
    
    // Mostramos el contenido de nuestra sesion, osea los num introducidos 
    echo "<br> Los Números introducidos son: <br>";
    foreach ($_SESSION['sesionex'] as $k) {
        if ($k != 0){
            echo $k . "<br>";
        }
    }
    
    $acumula = 0;
    $pares = 0;
    $impares = [];
            
    if (isset($_POST['hola'])){ // Si hemos introducido un valor
        // Si este valor es 0 o está vacío (recordemos que los negativos también entran pues todo negativo se convierte en 0 arriba de este script)
        if ($_POST['hola'] = 0 || $_POST['hola'] === '' || empty($_POST['hola']) || $_POST['hola'] === null) {
            
            
            for ($i = 0; $i< $pos; $i++){
               if ($_SESSION['sesionex'][$i] % 2 === 0) {
                // Sumamos los números pares y los introducimos en una variable
                $pares += $_SESSION['sesionex'][$i];
                }
                
                else { // Introducimos los impares en un array para posteriormente obtener el mayor
                    $impares[] = $_SESSION['sesionex'][$i];
                }
            }
            // Limpiamos nuestra variable-sesión de ceros para que sumen como "numero introducido"
            for ($i = 0; $i< $pos; $i++){
                if ($_SESSION['sesionex'][$i] !=0){
                    $clean[] = $_SESSION['sesionex'][$i];
                }
            }
                
        echo "<br>Se introdujeron ". count($clean) ." números. <br>";
        echo "La media de pares es " . $pares / 2 . "<br>";
        echo "El mayor de impares es " . max($impares)  . "<br>";
        }            
    }
}
    else { // Nada más entrar en el navegador declaramos variables para evitar avisos
        $hola;
        $_SESSION['sesionex'] = [];
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 001</title>  
</head>
<body>

    <form action="" method="POST">
        
    <p>Inserte un número</p>
    <input type="number" name="hola"  /><br>
    <input type="hidden" name="oculto" value="
                          <?php  
                    // Con HTML creamos la variable de sesión sesionex y la mantenemos a lo largo de un sólo fichero gracias al input hidden                 
                            if(isset($_SESSION['sesionex'])) 
                            echo implode(", ", $_SESSION['sesionex'])  ?>" /> <br>

    <input type="submit"/>
        
</body>
</html>