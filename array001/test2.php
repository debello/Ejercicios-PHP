<?php
$tres = [10=>20, 30=>40, 50=>60];

$A = [1=>'uno', 
     2=>'dos',
      'tres' => 33,
     array(100 => 1000, 200=>2000, 300=>3000)];


echo key($A). " " . "<br>";


echo $A[1]. " " . "<br>";

echo key($A). " " . "<br>";



//////////////////////////////////PROB HAYA QUE JUNTAR 32 + 27
/////////////////////////[!] Linea 32
////////////////////Luego 25 para inspirarme en la solucion
//////////////////// Linea 44 Interesante para encontrar VALOR desde CLAVE

$keysA = array_keys($A);
$oneKey = key($A[3]); // PRINTEA 100

foreach ($A as $Ae => $keyo) {
    echo "foreach de $ A " . $Ae .  " y " . $keyo . "<br>"; ///PRINTEA el $A sin [3]
}                                                       // OSEA SIN PRINTEAR EL ARRAY


foreach ($A[3] as $trese => $keyese) { /// PRINTEA EL ARRAY DENTRO DE $A
    echo "foreach de $ A[3] " . $trese . " y " . $keyese . "<br>";
}

echo $oneKey . "<br>";

echo $keysA[0] . "<br>";
echo $keysA[1] . "<br>";
echo $keysA[2] . "<br>";
echo $keysA[3] . "<br>";


echo "array search " . array_search('uno', $A); // BUSCA desde un KEY su VALOR dentro dfe un array



// for ($i = 0; $i < 10; $i++) {
//    print_r(get_defined_vars());
?>