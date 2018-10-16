
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php 
/* 

*/

    
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    
// Esquema de las 6 posibilidades (cada una en un condicional if)
    // $a > $b > $c
    // $a > $c > $b
    // $b > $a > $c
    // $b > $c > $a
    // $c > $a > $b
    // $c > $b > $a
    
echo "<strong> De mayor a menor:</strong> <br>";
    
// Si alguna casilla está vacía... imprimimos el mensaje de "inténtelo de nuevo"    
if (empty($a) || (empty($b)) || (empty($c))) {
    echo "No se han rellenado todas las casillas, inténtelo de nuevo";
}       
    
// Si a es mayor que b y b mayor que c...
else if ($a > $b && $b > $c) {
    echo $a . " valor de a <br>" . $b . " valor de b <br>" . $c . " valor de c";
}
// Si a es mayor que c y c mayor que b...   
else if ($a > $c && $c > $b) {
    echo $a . " valor de a <br>" . $c . " valor de c <br>" . $b . " valor de b";
}
    
else if ($b > $a && $a > $c) {
    echo $b . " valor de b <br>" . $a . " valor de a <br>" . $c . " valor de c";
} 
    
else if ($b > $c && $c > $a) {
    echo $b . " valor de b <br>" . $c . " valor de c <br>" . $a . " valor de a";
} 
    
else if ($c > $a && $a > $b) {
    echo $c . " valor de c <br>" . $a . " valor de a <br>" . $b . " valor de b";
} 
    
else if ($c > $b && $b > $a) {
    echo $c . " valor de c <br>" . $b . " valor de b <br>" . $a . " valor de a";
} 

// Si algún valor coincide con otro   
else {
    echo "Ha habido un error o algún número coincide, inténtelo de nuevo";
}
    
    
    ?>
</body>
</html>