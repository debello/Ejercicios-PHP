<?php
/**
    Insertamos números hasta introducir uno negativo.
    Entonces nos debe decir cúantos números hemos introducido y cuál es la media de los impares y los pares.
*/

session_start();
if (!empty($_POST['hola'])) {

    if ($_POST['hola'] < 0 || $_POST['hola'] === '' || empty($_POST['hola']) || $_POST['hola'] === null || $_POST['hola'] === 0) {
        $_POST['hola'] = 0;
    } 

        
    $pos = count($_SESSION['sesionex']);
    $nom = $_POST['hola'];
    $_SESSION['sesionex'][$pos] = $nom;
    
    
    $numeros[] = $_SESSION['sesionex'];
    
       
echo "<br> Los números introducidos son: <br>";
    foreach ($_SESSION['sesionex'] as $k => $v) {
    echo $v . "<br>";
}
 
       
   
   
    

}
    
else {
    $array = [];
    $array1 = array();
    $pos = 0;
    echo "nada";
    $_SESSION['sesionex'] = [];
    $_POST['hola'] = [];
}
  /**  for ($i = 0; $i < $count; $i++){
        
        $SESSION_["name$i"] = $_POST['num'];
        echo $SESSION_["name$i"] . "<br>";
    }
}
**/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 001</title>  
</head>
<body>

    <form action="" method="POST">
        
    <p>Inserte un número</p>
    <input type="number" name="hola"  /><br>
    <input type="hidden" name="oculto" value="
                                              <?php  if(isset($_SESSION['sesionex'])) 
                                                echo implode(", ", $_SESSION['sesionex'])  ?>" /> <br>



    <input type="submit"/>
        
<?php
            $acumula = 0;
            $pares = 0;
            $impares = [];
        
           $countNum = count($_SESSION['sesionex']);
           
      
           
     
           
        if ($_POST['hola'] <= 0) {
    for ($i = 0; $i< $countNum; $i++){
        if ($_SESSION['sesionex'][$i] % 2 === 0) {
            echo "Pares: ";
            $pares += $_SESSION['sesionex'][$i];
        }
        else {
            echo "Imppares: ";
            $impares[] = $_SESSION['sesionex'][$i];
        }
    }
        foreach ($_SESSION['sesionex'] as $k => $v){
            echo "test: " . $k, $v;
        }
    
echo "<br>Se introdujeron ". count($_SESSION['sesionex']) ." números. <br>";
echo "La media de pares es " . $pares / 2 . "<br>";
echo "El mayor de impares es " . max($impares)  . "<br>";
            
        }
           
    else {echo "siga introduciendo numeros";}
           
 /*   <input type="hidden" name="oculto" value="<?php 
                           if (isset($array)) { 
                                 echo implode(", ", $array); } ?>" /> <br>
/*        
        // value="<?php $_SESSIO; ?>"



<input type="hidden" name="oculto" value="<?php 
                           if (isset($array)) { 
                                 echo implode(", ", $array); } 
                         //  //?>" /> <br>



*/
    
?>
    

</body>
    
</html>