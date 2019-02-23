<html>
    <head> <title> Título 
           </title>
    </head>
<body>
        
<?php  

// Creamos una variable con valor 10 
$num = 10;

// for loop, nueve repeticiones/filas para poner asteriscos y/o espacios
// loop principal $i
for ($i = 0; $i<10; $i++) {

/* 
ESPACIOS
Creamos una fila de espacios en blanco cuya cantidad depende del valor de $num (el cual empieza por 10)

*/
    for ($b = 0; $b<$num; $b++) {
                echo "&nbsp;";
    }
/* 
Reducimos el valor de $num en una unidad para que en la próxima repetición de $b se cree una fila de espacios en blanco con menos (léase comentario anterior)
*/
$num--;

/* 
ASTERISCOS
Creamos una fila de asteriscos cuya cantidad depende del valor de $i
*/
    for ($a = 0; $a<$i; $a++) {
        echo "*";
    }
    
// Un espacio cada vez que ejecutamos una repetición del loop principal $i se crea una nueva fila
    echo "<br>";
}


        ?>   
            
    </body>
</html>