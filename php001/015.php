<?php 

$i = 320;
$a = 0;

// Creamos un for donde reduciremos $i (320) en 10 repeticiones, las cuales serán más que suficientes
for ($x = 0; $x < 10; $x++) {
    echo $i . "<br>";

// Después de mostrar $i realizamos "$i = $i - 20" osea quitamos 20 unidades a $i y reasignamos esa nueva cifra a $i, reduciéndola así de 20 en 20 en cada repeticion...
    $i -=20;
    
// hasta que $i vale menos de 160, momento donde detenemos el programa
    if ($i < 160) {
        break;
    }
    
}

// Nota [!] No se llegan a usar las 10 repeticiones, con nueve bastan                  
?>