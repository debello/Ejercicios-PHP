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
            echo $v . "<br>"; // Deberíamos tener 2 valores: El introducido y el de por defecto Submit(Enviar)
            if (isset($k) && isset($v)) {
            //$postK[] = $k;
            $postV[] = $v;
        }}
    }

    
        
        
        
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
echo "<br> PROBANDO POSTS" .$_POST['telf3'];
echo "<table id='test' border='1' align='center'>";
echo "<tr>
        <th>Nombre</th>
        <th>Telefono</th>
      <tr>";
// SI es un nombre Repetido, copia y pega el valor en la primera casilla


    
if ($_POST['nombre'] === '' || $_POST['nombre'] === null || empty($_POST['nombre'])) {
            echo "ADVERTENCIA";
}    
  
   

echo "<br> numgets: $numGets <br>";

    
$nome = $_POST['nombre'];
$telf = $_POST['telf'];
    
foreach ($postV as $k => $v) { // PASAR NOMBRE Y TELF A ARRAYS DIFERENTES
    
    if ($k % 2 === 0) {
        $postNombres[] = $v;
    }
    else if ($k % 2 != 0) {
        $postTelfs[] = $v;
    }
    
}
for ($i = 0; $i < $numGets; $i++){ /// SUSTITUIR TELEFONO (pero nome y telf[0] es una repeticion)
    for ($a = 0; $a < $numGets; $a++){
        if($postNombres[$i] === $postNombres[$a]){
            $postTelfs[$a] = $postTelfs[$i];
            
    }}
}
        


    $postNombres = array_unique($postNombres);
for ($i = 1; $i < $numGets; $i++){ // quitamos TELF con el NOMBRE
if (!isset($postNombres[$i])) {
    unset($postTelfs[$i]);
    }
}

    

    
    for ($i = 0; $i < $numGets; $i++){ // IMPRIMIR
        if (isset($postNombres[$i]) && isset($postTelfs[$i])){
        //if (isset($postNombres) && isset($postTelfs)){
         echo "<tr><td>$postNombres[$i]</td><td>$postTelfs[$i]</td></tr>";
    }
}
        
    
    
    

  
    


print_r($arrayEnd2);

                
        

    
    

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



