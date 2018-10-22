<?php

//Cambiar texto de contenido por palabras (gatificar), sin vocales.... etc

$texto = "El perro doméstico proviene de un ancestro o grupo ancestral común que data de hace aproximadamente 30 000 años y desde entonces se ha extendido a todas partes del mundo. Los primeros restos fósiles de perros enterrados junto con humanos fueron encontrados en Israel y datan de hace unos 12 000 años. Desde entonces, los perros y los humanos han evolucionado conjuntamente. Los perros comparten el entorno, los hábitos y el estilo de vida humanos, como las dietas ricas en cereales y almidón. La alimentación inadecuada, así como el uso de antibióticos, son la causa del desarrollo de muchas enfermedades inflamatorias e inmunológicas. Unas cuatrocientas enfermedades del perro tienen una equivalente humana, destacando especialmente la enfermedad de Alzheimer y otros trastornos neurológicos, así como cánceres, enfermedades autoinmunes y enfermedades cardiovasculares.";

echo $texto . "<br>"; // DELETE

$textogato = str_replace("perro", "gato", $texto);
$textoarray = explode(" ", $textogato);

$vocalesstring = "aeiouAEIOU";

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
    else {$newarray[$i] = $textoarray[$i];}
};

$reTexto = implode(" ", $newarray);
$reReTexto = preg_replace('/&/', "", $reTexto);
// HASTA AQUI tenemos un array con && en lugar de las consonantes al principio de palabra // DELETE// DELETE// DELETE// DELETE// DELETE
echo "<br> $reTexto <br>"; // DELETE
echo "<br> $reReTexto <br>";

?>