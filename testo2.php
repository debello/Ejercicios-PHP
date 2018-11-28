
<?php
$nem = 200;

$length = strlen($nem);
$length1 = strlen($nem) - 1; // Saber si es par o impar // Dividir por 100, 10...
$lon = $length*0.5-0.5;
$len = strlen($nem) - 1;
$a = [];
    
    if ($length < 2){
        if ($length === 2){
            if (strcmp($nem[0], $nem[1]) === 0) {
                echo "ES capicúa";
            }
        else { 
            echo "NO es capicúa";
        }
    }
    else {
        echo "Introduzca un número con 2 o más cifras.";
    }
}
else {
    
    
    if ($length % 2 === 0) { // Si la cantidad del num es par [Probemos CAPI PARES]
        
        for ($i = 0; $i < $length*0.5; $i++) { //Por cada(mitad) de cantidad
            //si el [$i] el uiltimo y ultimo coincide
            // $si segundo y penultimo coinciden( si existen...)
            if (strcmp($nem[$i],$nem[$len]) != 0) { 
                
                $a[] = 1;
                
            }
            else {
                
            }
            
            $len--;

    }
}


    if ($length % 2 != 0) { // si la cantidad de num es IMPAR
        echo "<br>TEST SI LLEGA A B y ".$nem."y".$lon;
        
        for ($i = 0; $i < $lon; $i++) {
                echo "<br>TEST SI LLEGA A ". $nem[$i];

            if (strcmp($nem[$i],$nem[$len]) != 0) { 
                $a[] = 1;
            }
            else {
                echo "<br>TEST SI LLEGA A b2";
                
            }
            
            $len--;
        }
    }

    if (in_array(1, $a) === true) {
        echo "eeee";
         echo " NO es capicua";
    }
    else {
        echo " ES capicuaa";
    }
 }


    //echo "<br> TEST SOLO: ".checkCapicua(200);


        
        
        
    ?>
    

