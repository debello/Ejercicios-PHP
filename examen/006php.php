<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
$numero = 534; // Número que queremos introducir (numero introducido)
    
function pegaPorDetras($introducido, $añadir){
    
    $introEx = str_split($introducido); // repartimos el numero introducido en un solo array
    $añadirEx = str_split($añadir); // lo mismo con el numero añadido

    $size2 = sizeof($añadirEx); // 'cifras que tiene nuestro num añadido'

    
    for ($i = 0; $i <  $size2; $i++){ // de $i a 'cifras que tiene nuestro num añadido'
        if (isset($añadirEx[$i])){ // hasta que los elementos del numero añadido dejen de existir
        $introEx[count($introEx)] = $añadirEx[$i];
            // ^ Desde el final de $intro, introduciremos cada cifra del numero añadido
        }
        
    return $introEx;
    }
}
    
    

$final = pegaPorDetras($numero, 7);
        foreach ($final as $e){ // Vemos cómo queda nuestro array
        echo $e;
        }
    
    
?>
</body>
</html>
