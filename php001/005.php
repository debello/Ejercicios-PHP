<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
    $numero = 100;
    $palabra = "hola amigos";
        print_r(get_defined_vars());
    
    
/* 
RESULTADO DE EJECUTAR EL CODIGO

Array ( 
    [_GET] => Array ( ) 
    [_POST] => Array ( ) 
    [_COOKIE] => Array ( ) 
    [_FILES] => Array ( ) 
    [numero] => 100 
    [palabra] => hola amigos
    )

Muestra las variables definidas en dicho código las cuales son 6; 4 de ellas definidas como un array vacío por defecto (pues no las hemos definido a mano en nuestro código) y dos de ellas definidas (número y palabra).

Si por ejemplo hubiésemos tenido que usar la variable _GET para recoger el nombre de un dato y asignarlo a una variable

    $a = $_GET['a'];

al ejecutar el código print_r(get_defined_vars()) no obtendremos un array vacío de [_GET] si no que obtendremos en la lista de resultados anteriormente mencionada:
    [_GET] => Array ( [a]
Osea que la variable _GET tendría como elemento de su array "a".

Esta línea de código es útil para conocer todas las variables declaradas (y corroborar que se han recogido las que hemos solicitado en nuestro código).
*/
    
?>
</body>
</html>

