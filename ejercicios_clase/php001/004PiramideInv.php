<html>
    <head> <title> Título 
           </title>
    </head>
<body>
        
<?php
    
$num = 10;

            
for ($i = 0; $i<10; $i++) {

/*
A partir del ejercicio anterior sólo se tuvo que invertir algunas líneas de código
Estas fueron:
Intercambiamos el echo de asteriscos por los espacios en blanco y viceversa
Ahora los espacios dependen del valor de $i y...
*/
    for ($a = 0; $a<$i; $a++) {
        echo "&nbsp;";
    }

// el núm máximo de asteriscos por fila dependerá del valor de $num...
    
    for ($b = 0; $b<$num; $b++) {
                echo "*";
    }
    
// que irá reduciendo en cada ejecución del for loop 
    $num--;

    echo "<br>";
}

// Por añadido se tuvo que cambiar el orden de linea de los for loops para que empiece a imprimirse los espacios en blanco primero para dar forma a la pirámide (0 espacios en blanco en la fila 0, 1 espacio en blanco en la fila 1...)
        ?>   
            
    </body>
</html>