<?php
session_start();
if (!isset($_SESSION['num'])){
    
    //$_SESSION['num'] = $_POST['num'];
}
else {
    
   // echo "test: No está la session declarada?";
   
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



    echo "<br> TEST SOLO: el num 200 ".checkCapicua(200);

    
function checkCapicua($nom) {
$nom = (string)$nom;
$length = strlen($nom);
$length1 = strlen($nom) - 1; // Saber si es par o impar // Dividir por 100, 10...
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
        for ($i = 0; $i < $length*0.5-0.5; $i++) {
            if (strcmp($nom[$i],$nom[$len]) != 0) { 
                
                $a[] = 1;
            }
            else {
                
            }
            
            $len--;
        }
    }

    if (in_array(1, $a) === true) {
         return " NO es capicua";
    }
    else {
        return " ES capicuaa";
    }
 }
}
    
$_SESSION['num'] = $nem;
echo "<br>El numero: ".$_SESSION['num'] . checkCapicua($nem);
session_destroy();
session_unset();
?>
    

</body>
    
</html>