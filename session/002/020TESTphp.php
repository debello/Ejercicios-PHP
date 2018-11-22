<?php
/**
    Ya guarda lo que escribamos en un array. 
    Ese array lo pasamos a una SESSION[All]
    Pero buscamos guardar directamente lo que escribimos en una Session...
*/

session_start();
//session_destroy();
if (!empty($_POST['hola'])) {
    

    $array[] =  $_POST['hola'];
    $array1 = explode(",", $_POST['oculto']);
    $pos = count($array1);
    $nom = $_POST['hola'];
    $array1[$pos] = $nom;
    

    

echo "probaremos el ARRAY1:";
foreach ($array1 as $k => $v) {
    echo $k . " " . $v . "<br>";
}
    $count = count($_SESSION);
    $count2 = $count - 1;

$_SESSION['All'] = $array; /// Insertamos los datos del array en una session
    echo "test sesiones:" . $_SESSION['All'][0] ." y luego ". $_SESSION['All'][1];
    

       
   
echo "<br> HOW MANY POSTS: <br>";
foreach ($_POST as $k => $v) {
    echo $k . " " . $v . "<br>";
}
echo "<br> HOW MANY SESSIONS: <br>";
foreach ($_SESSION as $k => $v) {
    echo $k . " " . $v . "<br>";
}
    
    

}
    
else {
    $array = [];
    $array1 = array();
    $pos = 0;
    echo "nada";
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
    <input type="text" name="hola"  /><br>
    <input type="hidden" name="oculto" value="<?php echo implode(", ", $array1)  ?>" /> <br>



    <input type="submit"/>
        
<?php
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