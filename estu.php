<?php
/**
    App para saber cuánto tiempo pasas ESTUDIANDO y NO ESTUDIANDO:
    Cuando insertemos cualquier dato crearemos un punto de partida (fecha).
    Cuando volvamos a insertar un dato, restaremos la fecha anterior con la actual para saber cuánto tiempo ha pasado en segundos.
    
    
*/

session_start();
//session_destroy();
if (!empty($_POST['hola'])) {


    
   
 $_POST['hola'] = date('h:i:s'); // Cualquier input se convertirá en la hora actu
        
    
    

    $array[] =  $_POST['hola'];
    $_SESSION['sesione'] = $_POST['oculto'];
    $_SESSION['sesione'] = explode(",", $_POST['oculto']);
    $pos = count($_SESSION['sesione']);
    $nom = $_POST['hola'];
    $_SESSION['sesione'][$pos] = $nom; // Hasta aquí el ejercicio de SESSION 002
    
    // Pasamos el array de sesiones a otro, por si acaso.
    $arrayHora[] = $_SESSION['sesione'];
    
    // Convertimos este array en una larga línea string
    $testo = implode("", $arrayHora[0]);
    
    // Vemos qué contiene dicha linea (todas las veces que hemos hecho input)
    for ($i = 0; $i < count($arrayHora); $i++){
        echo $testo;
     
    } 
    
    // Sustraemos la última hora
    $testUlt = substr($testo, -8, 8);
    $testUlt = str_replace(":","", $testUlt);
    // Sustraemos la penúltima hora
    $testPUlt = substr($testo, -16, 8);
    $testPUlt = str_replace(":","", $testPUlt);
    
    // Restamos la última con la penúltima hora
    echo "test testult" . ($testUlt - $testPUlt);
    
  

//echo "probaremos el ARRAY1:";
//foreach ($array1 as $k => $v) {
//    echo $k . " " . $v . "<br>";
//}
  //  $count = count($_SESSION);
//    $count2 = $count - 1;
echo "<br>Probando la resta de 0 y 1: " . $_SESSION['sesione'][0] - $_SESSION['sesione'][1];
//$_SESSION['All'] = $array; /// Insertamos los datos del array en una session
    //echo "test sesiones:";
    foreach ($_SESSION['sesione'] as $k => $v) {
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
    <title>Tiempo estudio</title>  
</head>
<body>

    <form action="" method="POST">
        
    <p>Inserte un número</p>
    <input type="text" name="hola"  /><br>
    <?php
   
 $_POST['hola'] = date('h:i:s');
        
    
?>
    <input type="hidden" name="oculto" value="<?php echo implode(", ", $_SESSION['sesione'])  ?>" /> <br>



    <input type="submit"/>
        

    

</body>
    
</html>