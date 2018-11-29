<?php
session_start();
if (!isset($_SESSION['numA'])){
    $a = 0;
    $b = 0;
    $_SESSION['numA'] = 0;
    $_SESSION['numB'] = 0;

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
    
if (isset($_SESSION['numA'])) {
    $_SESSION['numA'] = $_SESSION['numA'] + 1;
echo "el valor de sesion A " . $_SESSION['numA'];
echo "intentemos aumentarlo: <a href='005php.php'>test</a>";
}
    
if (isset($_SESSION['numB'])) {
    $_SESSION['numB'] = $_SESSION['numB'] + 1;
echo "<br>el valor de sesion B " . $_SESSION['numB'];
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