<?php
session_start();
if (!isset($_SESSION['num'])){
    $a = 0;
    $b = 0;
    $_SESSION['num'] = $_POST['num'];
}
else {
    
   // echo "test: No está la session declarada?";
    $a;
    $b;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 006 - Capicúa</title>  
</head>
<body>
    <p>Inserte un número para saber se é ou non capicúa:</p>
    <form action="" method="POST">
        <input type='text' name='num'/>
        <input type='submit'/>
    </form>
<?php
$num = $_POST['num'];
$length = strlen($num);
$length1 = strlen($num) - 1; // Saber si es par o impar // Dividir por 100, 10...
$len = strlen($num) - 1;

echo "$num, $length";

$a = [];
    
    if ($length < 2){
        if ($length === 2){
            if (strcmp($num[0], $num[1]) === 0) {
                echo "ES CAPICUA";
            }
        else { 
            echo "no es CAPICUA!!!";
        }
    }
    else {
        echo "el núm no puede tener uno o menos cantidad de números";
    }
}
else {
    
    
    if ($length % 2 === 0) { // Si la cantidad del num es par [Probemos CAPI PARES]
        for ($i = 0; $i < $length*0.5; $i++) { //Por cada(mitad) de cantidad
            //si el [$i] el uiltimo y ultimo coincide
            // $si segundo y penultimo coinciden( si existen...)
            if (strcmp($num[$i],$num[$len]) != 0) { 
                echo "hay un num PAR que no es capi, este sus posuciones son $num[$i] y $num[$len]";
                $a[] = 1;
                
            }
            else {
                
            }
            
            $len--;

    }
}
                

    if ($length % 2 != 0) { // si la cantidad de num es IMPAR
        for ($i = 0; $i < $length*0.5-0.5; $i++) {
            if (strcmp($num[$i],$num[$len]) != 0) { 
                echo "hay un num IMPAR que no es capi, este sus posiciones son $num[$i] y $num[$len]";
                $a[] = 1;
            }
            else {
                echo "es un IMPAR capicua";
            }
            
            $len--;
        }
    }

    if (in_array(1, $a) === true) {
        echo "<br><br> NO es capicua";
    }
    else {
        echo "<br> <br> es capicua";
    }
    }
?>
    

</body>
    
</html>