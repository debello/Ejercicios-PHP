<?php
session_start();
if (!isset($_SESSION['A'])){
    if (!isset($_POST['Apos'])) {
    $a = 0;
    $b = 0;
    $_SESSION['A'] = 0;
    }
}
else {
    
    echo "test: No está la session declarada?";
    $a;
    $b;
    $nem = explode(", ", $num);
    $num = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>Ejercicio 005 - Aumentar, Disminuír</title> 
    <form method="$_POST" action="">

    <input type='number' name="Ach" value="pgA1.php" />
    <input type='radio' name="Ach" value="<?php ?>" />
    <input type='radio' name="Ach" value="<?php ?>" />
    
    <input type='radio' name="Bpos" value="" />
    <input type='radio' name="Bneg" value="" />
    <input type='radio' name="Bcero" value="" />
    
    <input type='submit'/>
        
</form>    
</head>
<body>

    <p>A y B</p>

<?php
$_SESSION['A'] = $_SESSION['A'] + $num;
echo "echo de sesion A " . $_SESSION['A'] . "<br>";
echo "echo de sesion Apos " . $_POST['Apos'];

    /*
    
    <input type='button' name="Aneg" value="<?php ?>" />
    <input type='button' name="Acero" value="<?php ?>" />
    
    <input type='button' name="Bpos" value="" />
    <input type='button' name="Bneg" value="" />
    <input type='button' name="Bcero" value="" />
    
    
    
    
    
if (isset($_SESSION['numA'])) {
    $_SESSION['numA'] = $_SESSION['numA'] + 1;
echo "el valor de sesion A " . $_SESSION['numA'];
echo "intentemos aumentarlo: <a href='005php.php'>test</a>";
}
    
if (isset($_SESSION['numB'])) {
    $_SESSION['numB'] = $_SESSION['numB'] + 1;
echo "<br>el valor de sesion B " . $_SESSION['numB'];
echo "intentemos aumentarlo: <a href='005php.php'>test</a>";
}*/
    
    
    
   // else{ echo "session num no está declarado";}
// cuando declaro sesion num?
    
// if y 
// aumentar +1 (guardarlo en session)
// redirigir a la misma página


?>
    

</body>
    
</html>