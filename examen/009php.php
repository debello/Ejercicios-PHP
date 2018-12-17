<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 009 EXAMEN - Primos</title>  
</head>
<body>

<?php
$uno = 6;
$dos = 1111111111111111111;
$tres = 11;
    


echo "El número $uno ..." . "<br>";
    
        $uno = (integer)$uno;
    switch (gmp_prob_prime($uno)) {
    case 0:
        echo "no es primo";
        break;
    case 1:
        echo "es probablemente primo";
        break;
    case 2:
        echo "es seguramente primo";
        break;
        }
    
 "El número $dos ...";
    $dos = (integer)$dos;
    switch (gmp_prob_prime($dos)) {
    case 0:
        echo "no es primo";
        break;
    case 1:
        echo "es probablemente primo";
        break;
    case 2:
        echo "es seguramente primo";
        break;
        }
    echo "<br>El número $tres ..."   . "<br>";
    
    
    $tres = (integer)$tres;
    switch (gmp_prob_prime($tres)) {
    case 0:
        echo "no es primo";
        break;
    case 1:
        echo "es probablemente primo";
        break;
    case 2:
        echo "es seguramente primo";
        break;
        }
    

    
    
/* Explicación del número primo y $c -
    Un número primo 13, al ser dividido entre números más pequeños que él (12, 11, 10, 9, 8...)
    dará:
    [num por el que dividimos] resultado
    
    [13] 1
    [12] número con decimales
    [11] número con decimales
    [10] número con decimales
    [9]  número con decimales
    [8]  número con decimales
    [7]  número con decimales
    [6]  número con decimales
    [5]  número con decimales
    [4]  número con decimales
    [3]  número con decimales
    [2]  número con decimales
    [1]  13
    
    mientras que un número no-primo dará números SIN decimales(entero) como resultado, i.e. 8

    [8] 1
    [7] número con decimales
    [6] número con decimales
    [5] número con decimales
    [4] número entero
    [3] número con decimales 
    [2] número entero 
    [1] 5
    
    En definitiva sabiendo que dividiendo números primos sólo da números con decimales (aparte de la división por si mismos y por uno, pero ésta es común a cualquier otro tipo de número) a diferencia de los enteros que sí pueden obtener un resultado sin decimales, identificaremos los primos mediante el programa. */
    ?>
    

</body>
    
</html>