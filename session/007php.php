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
$nem = $_POST['num'];
$length = strlen($nem);
$length1 = strlen($nem) - 1; // Saber si es par o impar // Dividir por 100, 10...
$len = strlen($nem) - 1;

echo $nem. ", " .$length;
function checkCapicua($nom) {
$length = strlen($nom);
$length1 = strlen($nom) - 1; // Saber si es par o impar // Dividir por 100, 10...
$lon = $length*0.5-0.5;
$len = strlen($nom) - 1;
$a = [];
    
    if ($length < 2){
        if ($length === 2){
            if (strcmp($nom[0], $nom[1]) === 0) {
                echo "ES capicúa";
            }
        else { 
            echo "NO es capicúa";
        }
    }
    else {
        return "Introduzca un número con 2 o más cifras.";
    }
}
else {
    
    
    if ($length % 2 === 0) { // Si la cantidad del num es par [Probemos CAPI PARES]
        
        for ($i = 0; $i < $length*0.5; $i++) { //Por cada(mitad) de cantidad
            //si el [$i] el uiltimo y ultimo coincide
            // $si segundo y penultimo coinciden( si existen...)
            if (strcmp($nom[$i],$nom[$len]) != 0) { 
                
                $a[] = 1;
                
            }
            else {
                
            }
            
            $len--;

    }
}


    if ($length % 2 != 0) { // si la cantidad de num es IMPAR
        echo "<br>TEST SI LLEGA A B y ".$nom."y".$lon;
        
        for ($i = 0; $i < $lon; $i++) {
                echo "<br>TEST SI LLEGA A ". $nom[$i];

            if (strcmp($nom[$i],$nom[$len]) != 0) { 
                $a[] = 1;
            }
            else {
                echo "<br>TEST SI LLEGA A b2";
                
            }
            
            $len--;
        }
    }

    if (in_array(1, $a) === true) {
        echo "eeee";
         return " NO es capicua";
    }
    else {
        return " ES capicuaa";
    }
 }
}
echo "<br> TEST CAPRI: ".checkCapicua(200);
    //echo "<br> TEST SOLO: ".checkCapicua(200);

$_SESSION['num'] = $nem;
echo "<br>El numero: ".$_SESSION['num'] . checkCapicua($nem);



    for ($i = 0; $i < $nem; $i++) {
    if (checkCapicua($nem) === ' ES capicuaa') {
        
        
            echo "<br> Testeando checkcapicua i: ".checkCapicua($i);
            echo "<br> Testeando valor de i:" . $i;
                if (checkCapicua($i) === ' ES capicuaa') {
                    echo '<br> El num '.$i.' es capicua';
                }
                else {
                    // NO es capicua
                }
            
        }
    }
        
        
        
        
        
    ?>
    

</body>
    
</html>