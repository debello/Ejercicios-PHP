<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 008 - Primos</title>  
</head>
<body>
    <p>Inserte un número para saber se é ou non capicúa:</p>
    <form action="" method="POST">
        <input type='number' name='num'/>
        <input type='submit'/>
    </form>
<?php
$nem = $_POST['num'];
$primos = [2, 3, 5, 7, 11, 13, 17];
$count = count($primos) - 1;


    
       for ($i = 1; $i < $nem; $i++) {
           $c = 0;
            for ($a = 1; $a < $nem; $a++) {
                $z = $i / $a;
                
                
                if ($i / $a === 1 || $i / $a === $i) {
                    
                    
                }
                else if ($i / $a != 1 || $i / $a != $i) {
                    $c++;
            }
           echo "<br>probando c:" .$c . "<br>";
           if($c === 17){
               echo "$i es primo ";
           }
        }
       }
    
                    




    /*
     //Encuentra los primos (2, 3, 5, 7... del array)
     
       for ($i = 0; $i < $nem; $i++) {
        for ($a = 0; $a < $count; $a++) {
           
              
              if ($i / $primos[$a] === 1){
                                    echo "<br>$i es primo";

              }
              else {
                  
              }

*/
       
        
        
        
    
   
    echo "<br>el restultado de las sumas de todos los primos menores de ". $_SESSION['num']." es ". $suma;
        
        
        
        
        
    ?>
    

</body>
    
</html>