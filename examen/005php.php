<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$a = 0;
echo "<p><strong>Nuestro Array Original</strong</p><br>";

while ($a < 20):
    $arr[] = rand(0, 100); // Mientras $a sea menor que 0, metemos un numero random en $arr[]
    $a++; // sumamos uno $a para continuar con la repeticion
endwhile;

    
    foreach ($arr as $e){ // Vemos cómo queda nuestro array
        echo $e . " ";
    }
    

    for ($i = 0; $i < 20; $i++){ // Capturamos los numeros pares en $arr2
        if ($arr[$i] % 2 === 0){ // Si un num dividido entre 2 tiene resto 0 es par
            $arr2[] = $arr[$i];
        }
    }
    // Hemos almacenado todos los pares, ahora metemos los impares
    
    for ($i = 0; $i < 20; $i++){
        if ($arr[$i] % 2 != 0){ // Si un num dividido entre 2 tiene resto NO 0 es impar
            $arr2[] = $arr[$i];
        }
    }
echo "<br><br><p><strong>Ordenados pares izquierda, imparres derecha</strong</p><br>";

    echo "<br>";
    foreach ($arr2 as $e){
        echo $e . " ";
    }
    
    
/**

  */  
?>
</body>
</html>
