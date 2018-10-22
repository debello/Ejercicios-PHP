<?php

//Cambiar texto de contenido por palabras (gatificar), sin vocales.... etc

$texto = "El perro doméstico proviene de un ancestro o grupo ancestral común que data de hace aproximadamente 30 000 años y desde entonces se ha extendido a todas partes del mundo. <br> Los primeros restos fósiles de perros enterrados junto con humanos fueron encontrados en Israel y datan de hace unos 12 000 años. Desde entonces, los perros y los humanos han evolucionado conjuntamente. Los perros comparten el entorno, los hábitos y el estilo de vida humanos, como las dietas ricas en cereales y almidón. La alimentación inadecuada, así como el uso de antibióticos, son la causa del desarrollo de muchas enfermedades inflamatorias e inmunológicas. Unas cuatrocientas enfermedades del perro tienen una equivalente humana, destacando especialmente la enfermedad de Alzheimer y otros trastornos neurológicos, así como cánceres, enfermedades autoinmunes y enfermedades cardiovasculares. <br>";

echo $texto . "<br>";

$textogato = str_replace("perro", "gato", $texto);
echo $textogato . "<br>";

$textoarray = explode(" ", $texto);

// sustituir consonantes? solo si es la primera
// sustituir
$vocales = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$vocalesstring = "aeiouAEIOU";

// -> IDEA
//if strpost $textoarray[$i] 0 IS NOT $vocales then
  //          sustituir por "" (eliminar la consonante)
echo $textoarray[1] . "<br>";
echo $textoarray[2][1]. "<br>";
$textoarray[2][0] = "&";
echo $textoarray[2] . "<br>";

echo $textoarray[3] . "<br>";
echo $textoarray[4] . "<br>";
echo $textoarray[5] . "<br>";
echo "nada" . "<br>";
echo substr($textoarray[1], 0, 1) . "<br>";

for ($i = 0; $i < sizeof($textoarray) ; $i++) {
    $var = substr($textoarray[$i], 0, 1);
    $var2 = substr($textoarray[$i], 1, 1);

    


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
   
    ;
$reReTexto = preg_replace('/&/', "", $newarray);

$reTexto = implode(" ", $newarray);
$reReTexto = preg_replace('/&/', "", $reTexto);
// HASTA AQUI tenemos un array con && en lugar de las consonantes al principio de palabra
echo "<br> $reTexto <br>";
echo "<br> $reReTexto <br>";



?>