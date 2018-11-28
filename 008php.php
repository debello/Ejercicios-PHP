<?php
session_start();

if (!isset($_POST['num'])){
    $nem;
    $_POST['num'] = '';   
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 008 - Primos</title>  
</head>
<body>
    <p>Saber num primos por debajo de: <?php if(isset($_POST['num'])) echo $_POST['num'] ?></p>
    <form action="" method="POST">
        <input type='number' name='num'/>
        <input type='submit'/>
    </form>
<?php
$nem = $_POST['num'];
   for ($i = 2; $i <= $nem; $i++) {
       $c = 0;
       for ($a = 1; $a <= $i; $a++) {
           $z = $i / $a;
           if ($z === 1 || $z === $i) {
                $c++;
           }
           
           else if (is_float($z)) {
                $c++;
           }      
        }
       if ($c === $i){ // Si un num es primo $c equivaldrá a él (todas sus divisiones dará 1, su propio numero o numeros con decimales(float))
           echo "$i es primo <br>";
       }
   }
session_destroy();
session_unset();
    ?>
    

</body>
    
</html>