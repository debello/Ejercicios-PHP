<?php
session_start();
if (!isset($_SESSION['num'])){
    $a = 0;
    $b = 0;
    $_SESSION['num'] = 0;
}
else {
    
    echo "test: No está la session declarada?";
    $a;
    $b;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 004 - Auntentication</title>  
</head>
<body>

    <p>A y B</p>

<?php
    
if (isset($_SESSION['num'])) {
    $_SESSION['num'] = $_SESSION['num'] + 1;
echo "el valor de sesio " . $_SESSION['num'];
echo "intentemos aumentarlo: <a href='005php.php'>test</a>";
}
    else{ echo "session num no está declarado";}
// cuando declaro sesion num?
    
// if y 
// aumentar +1 (guardarlo en session)
// redirigir a la misma página


    
?>
    

</body>
    
</html>