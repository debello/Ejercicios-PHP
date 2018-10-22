<?php

//Cambiar texto de contenido por palabras (gatificar), sin vocales.... etc

$texto = "aaa aa a bbb bb b";


$textogato = str_replace("perro", "gato", $texto);


$textoarray = explode(" ", $texto);

// sustituir consonantes? solo si es la primera
// sustituir
$vocales = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$vocalesstring = "aeiouAEIOU";

// -> IDEA
//if strpost $textoarray[$i] 0 IS NOT $vocales then
  //          sustituir por "" (eliminar la consonante)


for ($i = 0; $i < sizeof($textoarray) ; $i++) {
    $var = substr($textoarray[$i], 0, 1);
    $var2 = substr($textoarray[$i], 1, 1);

if (!empty($var2)) {
    


    if (strpos($vocalesstring, $var) === false) {      
        
        if (strpos($vocalesstring, $var2) === false) {
            $textoarray[$i][0] = "&";
            $textoarray[$i][1] = "&";
            $newarray[$i] = $textoarray[$i];
            }
        
        else {
            $textoarray[$i][0] = "&";
            $newarray[$i] = $textoarray[$i];  
        }
    }
        
    else { 
        $newarray[$i] = $textoarray[$i];  
     }
}
    else { $newarray[$i] = $textoarray[$i];}
    }
   
    ;


$reTexto = implode(" ", $newarray);

// HASTA AQUI tenemos un array con && en lugar de las consonantes al principio de palabra
echo "<br> $reTexto <br>";




?>