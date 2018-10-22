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

// -> IDEA
//if strpost $textoarray[$i] 0 IS NOT $vocales then
  //          sustituir por "" (eliminar la consonante)

    


for ($i = 0; $i < sizeof($textoarray) -1; $i++) {
    $var = substr($textoarray[$i], 0, 1);
    // PODEMOS USAR WHILE HASTA QUE NO ENCU_ENTRE VOCALES
   

    if (substr($textoarray[$i], 0, strlen($textoarray[$i])) !== $vocales) {
        if
        (substr($textoarray[$i], 0, 2) !== $vocales) {
        // reemplazar espacios las consonante
            $reempla = str_replace($var, "", $textoarray[$i]);
            echo $reempla ;
            $newarray[$i] = $reempla;
        }
        else { echo " test"; 
             }
    }
    
    else {
        echo "textoelse ";
    }
        echo "<br>";

};

$reTexto = implode(" ", $newarray);
echo "<br> $reTexto <br>";


?>