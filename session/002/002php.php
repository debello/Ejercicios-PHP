<?php
/**
    Ya guarda lo que escribamos en un array. 
    Ese array lo pasamos a una SESSION[All]
    Pero buscamos guardar directamente lo que escribimos en una Session...
*/

session_start();
//session_destroy();
if (!empty($_POST['hola'])) {

        if ($_POST['hola'] < 0 || $_POST['hola'] === '' || empty($_POST['hola']) || $_POST['hola'] === null || $_POST['hola'] === 0) {
        $_POST['hola'] = 0;
    } 

        
    $pos = count($_SESSION['sesionex']);
    $nom = $_POST['hola'];
    $_SESSION['sesionex'][$pos] = $nom;
    
    
    $numeros[] = $_SESSION['sesionex'];
    

    foreach ($numeros[0] as $k){
        echo "esto es numeros [0] :$k <br>";
    }

    

//echo "probaremos el ARRAY1:";
//foreach ($array1 as $k => $v) {
//    echo $k . " " . $v . "<br>";
//}
  //  $count = count($_SESSION);
//    $count2 = $count - 1;

//$_SESSION['All'] = $array; /// Insertamos los datos del array en una session
    //echo "test sesionexs:";
    
echo "<br> HOW MANY $ SESSION SESIONEX <br>";
    foreach ($_SESSION['sesionex'] as $k => $v) {
    echo $k . " " . $v . "<br>";
}
 
       
   
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
    $_SESSION['sesionex'];
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
    <input type="hidden" name="oculto" value="<?php  if(isset($_SESSION['sesionex'])) echo implode(", ", $_SESSION['sesionex'])  ?>" /> <br>



    <input type="submit"/>
        
<?php
            $acumula = 0;
           $countNum = count($_SESSION['sesionex']);
           
      
           
     
           
        if ($_POST['hola'] <= 0) {
    for ($i = 0; $i< $countNum; $i++){
        $acumula += $_SESSION['sesionex'][$i];
    }
    $media = $acumula * 0.5 ;
echo "la media es $media";
            
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