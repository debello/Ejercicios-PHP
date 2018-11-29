<?php
/**
    Insertar varios números y enseñar la media cuando insertemos un número negativo (incluído 0, en este programa).
    También puedes ver la media si no introduces ningún dato
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
            
    if (isset($_POST['hola'])){ // Si hemos introducido un valor
        // Si este valor es 0 o está vacío (recordemos que los negativos también entran pues todo negativo se convierte en 0 arriba de este script)
        if ($_POST['hola'] = 0 || $_POST['hola'] === '' || empty($_POST['hola']) || $_POST['hola'] === null) {
            for ($i = 0; $i< $pos; $i++){ // Sumamos los valores introducidos
                $acumula += $_SESSION['sesionex'][$i];
            } // Calculamos e imprimimos media
            $media = $acumula * 0.5 ;
            echo "<br><strong>La media es $media </strong>";    
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