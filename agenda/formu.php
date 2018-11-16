<?php
/** 
LINEA 170 ??

Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.

*/
    if (isset($_POST['nombre'])) { // Si hemos introducido un valor en la casilla...
    //    if (in_array("", $_POST, true)){
      //      echo "hay un campo vacio";
    //}

        
        foreach ($_POST as $k => $v) { // Metemos los valores de nuestros $_Post (inicialmente son 2) en $array
            $array1[] = $v; // Deberíamos tener 2 valores: El introducido y el de por defecto Submit(Enviar)
        }
            foreach ($_POST as $k => $v) { // Metemos los valores de nuestros $_Post (inicialmente son 2) en $array
            echo $k, $v; // Deberíamos tener 2 valores: El introducido y el de por defecto Submit(Enviar)
        }


        echo "count posts: " . count($_POST) . "<br> and numgets: $numGets <br>";
        
        
        $numGets = (count($_POST)) * 0.5; 
        var_dump($numGets);
        
        if ($_POST['nombre'] != '' || $_POST['nombre'] != null){
            echo "post";
            
        }
        else if ($_POST['nombre'] === '' || $_POST['nombre'] === null || empty($_POST['nombre'])) {
            
            echo "nopost";
           $numGets = ((count($_POST)) * 0.5)  ;
        }
        
echo "<br>counNUMGETS $numGets <br>";
        
        
        $countArray = count($array1);
        // Separamos Nombres de Teléfonos
        for ($i = 0; $i < $countArray; $i++){
            if ($i % 2 === 0 && !empty($array1[$i])) { // Los pares serán nombres. Los pasamos a $arrayNames
                $arrayNames[] = $array1[$i];
            }
            else if ($i % 2 != 0 && !empty($array1[$i])) { // Quedan los impares. Los pasamos a $arrayNumbers
                $arrayNumbers[] = $array1[$i];
            }
        }
    

        
        // Combinamos ambos para que quede Clave -> Valor (Nombre -> Telefono)
        $arrayEnd = array_combine($arrayNames, $arrayNumbers);
        $arrayEnd2 = $arrayEnd;
        print_r($arrayEnd);
    
    }



    else { // Recién entremos en la página. 
        // Carga el array vacío para que simplemente el código no muestre avisos.
        echo "Introduzca ambos campos";
        $array1 = [];
        $arrayEnd = [];
        
    }/////////////////////////////////////////
//////////////// DESDE AQUI !!!
//////// Capturar cuando pongamos un espacio en blanco y....
////////////????????? parar el programa??? pedir que se congele la insercion de array??? etc
// tipo : if person[countoflastpersona-numGets99] = ""
// then parar la creacion/insercion etc ???? 


  //      if (in_array("", $arrayNames, true)){
    //      echo "hay un campo vacio en names";
    //}
        




?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
    <style>
        #test {
            background-color: red;
            position: relative;
            top: 20px;
            left: 100px;
        }
        .formu {
            position: relative;
            top: 20px;
            left: 500px;
        }
    </style>
<body>
<div class="formu">
    <h3>AGENDA</h3>



    <form action="" method="POST">

        <p>Introduzca un Nombre</p>
        <input type="text" name="nombre"/><br>
        <input type="text" name="telf"/><br>
        <input type="submit" />
</div>        
    <?php
    
    
        


    


    /**
    Nuestra estrategia es;

        Introducir una variable > El contador de $_POST crece una unidad > Nos permite crear un <input hidden $_POST 
            Lo creamos automáticamente > Vuelta al inicio.
                . 

    0 Parámetros introducidos > 0 cantidad de $_POST
    1 Parámetro introducido > 1 cantidad de $_POST (restaríamos el $_POST de Submit)
    2 Parámetros introducidos > 2 cantidad de $_POST
    ....

    */


    $a = 0;
    $b = 1;

    for ($i = 0; $i < $numGets; $i++) { // Crearemos inputs "hidden" cada vez que introduzcamos un valor(aumentemos en uno la cantidad de $_POST[])
        if ($i === 0) { // Empezamos enlazando la caja de texto con nuestro primer hidden
                        // name = person0 value = $POST 'nombre'
            echo "<input type='hidden'" . 
                "name='person$i'".
                "value='" . $_POST['nombre'] . "' />";
            
            echo "<input type='hidden'" . 
                "name='telf$i'".
                "value='" . $_POST['telf'] . "' />";
        }

        else { // Seguiremos creando hidden con la misma suceción
                // name = person1 value = $POST 'person0'
                // name = person2 value = $POST 'person1'....
            
            $persone = "person$a";     
            echo "<input type='hidden'" . 
            "name='person$b'".
            "value='" . $_POST[$persone] . "' />";
            
            $telfe = "telf$a";     
            echo "<input type='hidden'" . 
            "name='telf$b'".
            "value='" . $_POST[$telfe] . "' />";
            
            $a++;
            $b++;              
        }
    }   


echo "<table id='test' border='1' align='center'>";
echo "<tr>
        <th>Nombre</th>
        <th>Telefono</th>
      <tr>";
// SI es un nombre Repetido, copia y pega el valor en la primera casilla

uksort($arrayEnd, 'strnatcasecmp');

$keys = array_keys($arrayEnd); // 0, 1, 2 : b c a (orden of insert)
$values = array_values($arrayEnd); // 0, 1: a b c
    
$keys1 = array_keys($arrayEnd2);    
$values1 = array_values($arrayEnd2);    

        $keyo = $_POST['nombre'];
        $valuo = $_POST['telf'];
        print_r($arrayEnd2);
if ($_POST['nombre'] === '' || $_POST['nombre'] === null || empty($_POST['nombre'])) {
            echo "ADVERTENCIA";
}    
  
foreach ($keys as $k ) {
    echo "<br> KEYS : $k";
}    
    
echo "<br> numgets: $numGets <br>";
for ($i = 0; $i < $numGets; $i++){
    // if empty key[]
    //    if (empty($keys1[0])){
  //          array_push($keys1, $keys1[0]);
//            unset($keys1[0]);
 //           array_pop($keys1);

/**
            if ($keyo === $keys[$i] && !isset($valuo)){
                echo "testeando si se metio nombre pero no numero";
            }

*/

        
        if (isset($keys[$i])) {
            if ($keyo === $keys[$i]){ // Si el nombre introducido existe en la lista
                if (isset($values[$i])) { // Y hay un valor en el sorted que buscamos
            $values[$i] = $valuo; // Cambiamos el valor introducido
            echo "coincide<br> echo values $values[$i] y tambien $valuo";
                }
                if (empty($valuo)){
                    echo "test: valuo not set";
                }
        }}
        
            echo "<tr><td>$keys[$i]</td><td>$values[$i]</td></tr>";     
    }

 
                
        

            
/**
        $numGets = (count($_POST)) * 0.5; 
        var_dump($numGets);
        
        if ($_POST['nombre'] != '' || $_POST['nombre'] != null){
            echo "post";
            
        }
        else if ($_POST['nombre'] === '' || $_POST['nombre'] === null || empty($_POST['nombre'])) {
            
            echo "nopost";
           $numGets = ((count($_POST)) * 0.5) - 1 ;
        }
        
    */
    
        //echo "<tr><td>$keys[$i]</td><td>$values[$i]</td></tr>";   
        

     // unset key
    // if not empty
     // imprimimos

    
    
    

print_r($keys);
echo "<br>";
print_r($values);
echo "<br>";
print_r($keys1);
echo "<br>";
print_r($values1);
    


echo "</table>";

        
        ?>
    
    
    </form>


<?php
/** Ejemplo conceptual simple usando poco PHP - Guarda 5 (+1) Parámetros diferentes.

    <input type="hidden" name="personas" value="<?php echo  $_POST['nombre']; ?>" />
    <input type="hidden" name="personas1" value="<?php echo $_POST['personas']; ?>" />
    <input type="hidden" name="personas2" value="<?php echo $_POST['personas1']; ?>" />
    <input type="hidden" name="personas3" value="<?php echo $_POST['personas2']; ?>" />
    <input type="hidden" name="personas4" value="<?php echo $_POST['personas3']; ?>" />
    */

?>
</body>
</html>



