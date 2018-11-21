<?php


session_start();
//session_destroy();
if (!empty($_POST['oculto'])) {
    
    $array = explode(",", $_POST['oculto']);
    echo "lul1: $array[0], lul2: $array[1]";
    $a = 0;
    $b = 1;
    $c = 2;
    $_SESSION["primero$a"] = $_POST['texto'];
    $lol = $_POST['texto'];
    

    $count = count($_SESSION);
    $count2 = $count - 1;
    for ($i = 0; $i < $count; $i++){
        if($i === 0){
            $_SESSION["name$a"] = $lol;
            echo "testiando si funcioa";
        }
        else {
            $_SESSION["name$b"] = $_SESSION["name$a"];
            $a++;
            $b++;
        }
    
          
         $array[] = $_POST['texto'];
    }
    echo $_SESSION["name0"] . "y tambien echo" . count($_SESSION);
   
echo "<br> HOW MANY SESSIONS: <br>";
foreach ($_SESSION as $k => $v) {
    echo $k . " " . $v . "<br>";
}
    
    

}
    
else {
    $array = [];
    $pos = 0;
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
    <input type="text" name="texto"  /><br>

<input type="hidden" name="oculto" value="<?php 
                           if (isset($array)) { 
                                 echo implode(", ", $array); } ?>" /> <br>

    <input type="submit"/>
        
<?php
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