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
    
function generaArrayInt($min, $max, $size){
    $a = [];
    for ($i = 0; $i < $size; $i++){
        $a[] = rand($min, $max);
    }
    return $a;
}
    
echo "Probando el generador de numero random: <br><br>";
$arrayBase = generaArrayInt(0, 10, 5);
foreach ($arrayBase as $e){ // Vemos cómo queda nuestro array
        echo $e . " ";
    }

function minimoArrayInt($myarray) {
    
    if(is_array($myarray)){
  
        
        for ($i = 0; $i < count($myarray); $i++){
            if ($myarray[$i] === min($myarray)){
                return $myarray[$i];
            }
    
    }
}
}

echo "<br>El mínimo de mi array es: " . minimoArrayInt($arrayBase) . "<br>";
    
function maximoArrayInt($myarray) {
    if(is_array($myarray)){
        for ($i = 0; $i < count($myarray); $i++){
            if ($myarray[$i] === max($myarray)){
                return $myarray[$i];
            }
   
    }
}
}
    

echo "El maximo de mi array es: " . maximoArrayInt($arrayBase) . "<br>";

function mediaArrayInt($array) {
    $suma = 0;
    for ($i = 0; $i < count($array); $i++) {
        $suma += $array[$i];
    }
    $media = $suma / 2;
    return $media;
}

echo "Probando la media del array " . mediaArrayInt($arrayBase) . "<br><br>";
 
    

    
?>
</body>
</html>
