<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $a = 5;
    $b = 100;
    $c = 150;
    $z = 0;

   
echo "<p><strong>Opción FOR</strong</p><br>";
for ($i = $b; $i < $c; $i++) { // de 100 a 150
    if($b < $c ){ // Mientras 100 sea menor que 150 (iremos aumentando 100 hasta 150)
        $b += $a; // a 100 le sumamos 5 y imprimimos el resultado en cada vuelta 
    echo $b . "<br>";
    }

}
    
    $a2 = 5;
    $b2 = 100;
    $c2 = 150;
    $z2 = 0; // Creo los mismos valores en otras variables por si hay algún fallo (que el anterior bucle cambie la $b, por ejemplo)
    
echo "<br><br><p><strong>Opción WHILE</strong</p><br>";
while ($b2 < $c2):  // Mientras 100 sea menor que 150
    $b2 += $a2; // Aumentamos 100 sumándole 5 en cada repetición
    echo $b2 . "<br>";
endwhile;

    $a3 = 5;
    $b3 = 100;
    $c3 = 150;
    $z3 = 0; 
echo "<br><br><p><strong>Opción DO WHILE</strong</p><br>";

    do { // Es exactamente como el anterior pero a la inversa: 'Hacemos' 
        // 100 sumándole 5 cada repe
        $b3 += $a3; 
    echo $b3 . "<br>";
        
    }
    while ($b3 < $c3); //mientras 100 sea menor que 150


    
    
/**

  */  
?>
</body>
</html>
