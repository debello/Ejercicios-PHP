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
$length = strlen($num) - 1; // Saber si es par o impar // Dividir por 100, 10...
echo $num / 1000;

    

    if ($length % 2 === 0) { // Si la cantidad del num es par [Probemos CAPI PARES]
        for ($i = 0; $i < $length*0.5; $i++) { //Por cada(mitad) de cantidad
            //si el [$i] el uiltimo y ultimo coincide
            // $si segundo y penultimo coinciden( si existen...)
    }
}
    
?>
    

</body>
    
</html>