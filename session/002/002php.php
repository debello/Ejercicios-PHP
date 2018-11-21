<?php


session_start();
//session_destroy();
if (!empty($_POST['hola'])) {
    echo "prueba:" .  $_SESSION['prueba'];
    $_SESSION['prueba'] = $_POST['hola'];
    //$array = explode(",", $_POST['oculto']);
    

    //$_SESSION["primero$a"] = $_POST['texto'];
    //$lol = $_POST['texto'];
    

    $count = count($_SESSION);
    $count2 = $count - 1;
//    for ($i = 0; $i < $count; $i++){

   
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
    <input type="text" name="<?php 
                               echo "hola" ?>"  /><br>



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