<?php
/** 

AGENDA para Insertar contactos - Nombre y Teléfono

[] - Guardamos las variables de POST en un array
[] - Advertencia si no se inserta nombre
[] - Pasando Nombre y Teléfonos a arrays diferentes respectivamente
[] - For Loop para Sustitución y Borrado de nombres y teléfonos
[] - Borrado de nombres parte 3 y 4
[] - Else - Evitando que el programa nos de avisos

[] - Creación de <input "hiddens" en cada valor insertado
[] - Creación de las celdas





*/

if (isset($_POST['nombre'])) { // Si hemos introducido un valor en la casilla...
//    if (in_array("", $_POST, true)){
//      echo "hay un campo vacio";
//}


    foreach ($_POST as $k => $v) { // Metemos los valores de nuestros $_Post (inicialmente son 2) en $array
    // Deberíamos tener 2 valores: El introducido y el de por defecto Submit(Enviar)

    //$postK[] = $k;
    $postV[] = $v;
}
    
    /**  
         $numGets: 
         Var que cuenta la cantidad de $_POST que tenemos
         Nos interesa que esta cifra aumente de 1 en 1 cada vez que insertemos datos
         Originalmente aumenta de 2 en 2 así que lo multiplicamos por la mitad
         Para que aumente de 1 en 1
    */
    
    $numGets = (count($_POST)) * 0.5; 
        

    
    
    // Si no introducimos un nombre, creamos una advertencia.
    if ($_POST['nombre'] === '' || $_POST['nombre'] === null || empty($_POST['nombre'])) {
                echo "<div id='adv'>
                <p id='error'>Error:
                <p id='datos'>Datos no introducidos.</p></div>";
    }   
    
    
    
    
    
    
    
    // PASAR NOMBRE Y TELF A ARRAYS DIFERENTES
    foreach ($postV as $k => $v) { 

        if ($k % 2 === 0) { // Los pares (nombres) a una variabla
            $postNombres[] = $v;
        }
        else if ($k % 2 != 0) { // los impares (telefonos) a otra variable
            $postTelfs[] = $v;
        }
    
}
    
// SUSTITUCION(actualización) DEL TELEFONO
// BORRADO DEL TELEFONO

    for ($i = 0; $i < $numGets; $i++){ 
        for ($a = 0; $a < $numGets; $a++){ 

            // SUSTITUIR TELEFONO
            // Si hay un nombre repetido 
            // ... hemos escrito un teléfono en el formulario
            // ... ... y el nombre NO está vacío Y/O es un espacio en blanco
            if ($postNombres[$i] === $postNombres[$a] && !empty($postTelfs[$i]) && $postNombres[$i] != ''){
            // Modificamos el teléfono escrito por el almacenado 
                $postTelfs[$a] = $postTelfs[$i];


            }

            // BORRAR NOMBRE Y TELEFONO [Parte 1/4]
            // Si hay un nombre repetido en la lista
            // ... el teléfono enviado en el formulario está vacío
            else if($postNombres[$i] === $postNombres[$a] && $postTelfs[$i] === ''){
                // Sustituímos el teléfono del nombre repetivo por espacio en blanco
                $postTelfs[$a] = '';
            } 
        }
    }
    
// BORRAR NOMBRE Y TELEFONO [Parte 2/4]
// Si un teléfono es un espacio en blanco, el nombre correspondiente tb será un espacio en blanco
    for ($i = 0; $i < $numGets; $i++){ 
        if($postTelfs[$i] === ''){
            $postNombres[$i] = '';
        }
    }

//  BORRAR NOMBRE Y TELEFONO [Parte 3/4]
// Todos los nombres repetidos menos el primero (el que insertemos en el formulario) desaparecen, dejando casillas en blanco
    $postNombres = array_unique($postNombres);            
        
        
    }

// Else que se inicia nada más abramos la aplicación web
// Insertamos variables para que el programa no nos ponga avisos
    else    { 
        $postV = [];
        $postNombres;
        $numGets;
}
        



      


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
    <style>
        body {
            background-color: aqua;
        }
        
        #test {
            table-layout: fixed;
            border-collapse: collapse;
            border: 2px ridge black;
            background-color: red;
            position: absolute;
            top: 48%;
            left: 70%;
            z-index: 8;
            width: 20%;
        }
        
        #encabezado {
            border: 2px ridge black;
            background-color: #D99339;
            margin: 3px;
    
            
            
        }
        
        #cuerpo {
            border: 2px ridge black;
            background-color: #FFE4DC;
            
            
        }
                
        .celda {
          padding: 5px;
            
     
        }
        
        #cuadrado {
        width: 490px;
        height: 312px;
        border-style: dashed;
        position: absolute;
        background-color: bisque;
        top: 42%;
        left: 40%;
        
        z-index:7;
        }
        
        .formu {
            position: absolute;
            z-index: 8;
            top: 45%;
            left: 45%;
            
        }
        .formu p {
            font-size: 13px;
            font-family: sans-serif;
            font-style: italic;
            border-width: -20px;
            margin-bottom: 6px;
            
        }
        .formu h3 {
            font-size: 20px;
            font-style: bold;
            font-variant: small-caps;
        }
        
        .formu input[type="text"]{
            border: none;
        
            border-bottom: 1px solid #fff;
            padding-top: -40px;
            width: 80px;
            position:absolute;
            
            
            
            
        }
        
        .formu input[type="submit"]{
            color:#fff;
            padding:10px 20px;
            margin-top: 8px;
            outline:none;
            font-size:10px;
            font-weight: bold;
            width: 70px;
            height: 33px;
            background:linear-gradient(to bottom,#d16c35, #c76235);
            
            }
        #adv {
            top: 83%;
            left: 45%;
            z-index: 8;
            position:absolute;
            font-weight: bold;
            color: coral;
            font-size: 15px;
            font-family: "Arial Black";
            margin-top: -4px;            
        }
        #adv #error {
            letter-spacing: 2px;
        }
        #adv #datos {
            margin-top: -15px;
        }
        
        
        
        
    </style>
<body>
    

    <div id = "cuadrado"></div>
    
    <div class="formu">
    <h3 id='agenda'>Agenda</h3>
    
    

    <form action="" method="POST">

        <p>Introduzca Nombre:</p>
        <input type="text" name="nombre"/><br>
        <p>Introduzca Teléfono:</p>
        <input type="text" name="telf"/><br>
        <input type="submit"/>


</div>        
<?php
        


    
    /**
        Nuestra estrategia es;

        Introducir una variable > El contador de $_POST crece una unidad > Nos permite crear un <input hidden $_POST 
        > Vuelta al inicio.
    */
    
    
    $numGets = (count($_POST)) * 0.5;
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $numGets; $i++) { 
        // Crearemos inputs "hidden" cada vez que introduzcamos un valor
        // Los valores insertados se pasarán de hidden a otro hidden y a la vez crearemos el hidden mientras insertamos dicho valor.
        
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





    

echo "<table id='test'>";
echo "<tr id='encabezado'>
        <th id='nombre'>Nombre</th>
        <th id='telefono'>Telefono</th>
      <tr>";

    
// Imprimimos las celdas

    for ($i = 0; $i < $numGets; $i++){
        
        // BORRAR NOMBRE Y TELEFONO [Parte 4/4]
        
        // Si el nombre no está vacío ni tiene espacio en blanco ni el teléfono tiene un espacio en blanco... imprimimos celdas
        // Realmente nunca llegamos a "borrar" ni "sustituír" nombres ni teléfonos 
        
       if (!empty($postNombres[$i]) && $postNombres[$i] != '' && $postTelfs[$i] != ''){
        //if (isset($postNombres) && isset($postTelfs)){
         echo "<tr id='cuerpo' ><td class='celda'>$postNombres[$i]</td><td class='celda'>$postTelfs[$i]</td></tr>";
    }
}  
    

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



