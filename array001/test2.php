<?php
$tres = [10=>20, 30=>40, 50=>60];

$A = [1=>'uno', 
     2=>'dos',
      'tres' => 33,
     [100 => 1000, 200=>2000, 300=>3000]];

$a01 = array('ID ' => 'A01',  
        'Mates'=> 9,
        'Lingua: '=> 8,
        'Datos' => array(
                'Apelidos: '=>'Rabinovich', 
                'Idade: '=>'17', 
        ));


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


foreach ($tres as $trese => $keyese) { /// PRINTEA EL ARRAY DENTRO DE $A
    if  (is_array($trese) == true){
    echo "foreach de $ A[3] " . $trese . " y " . $keyese . "<br>";
}}

echo $oneKey . "<br>";

echo $keysA[0] . "<br>";
echo $keysA[1] . "<br>";
echo $keysA[2] . "<br>";
echo $keysA[3] . "<br>";


echo "array search " . array_search('uno', $A) . "<br>"; // BUSCA desde un KEY su VALOR dentro dfe un array

echo "empezamos " . "<br>" ;
for ($i = 0; $i < 3; $i++) {
    if ($i === 0) {
        echo "alumno ID: " . $a01['ID '] . " y test: " . array_search($a01["ID "], $a01) . "<br>"; /////// PRINTEA EL VALOR Y LUEGO LA CLAVE!
    }
    
    if ($i === 1) {
        foreach ($A[3] as $trese => $keyese) { /// PRINTEA EL ARRAY DENTRO DE $A
        echo "foreach de $ A[3] " . $trese . " y " . $keyese . "<br>";
        }
    }
    if ($i === 2) {
        
        foreach ($A as $Ae => $keyo) {
                
    echo "foreach de $ A " . $Ae .  " y " . $keyo . "<br>"; ///PRINTEA el $A sin [3]
} 
    }
}


// for ($i = 0; $i < 10; $i++) {
//    print_r(get_defined_vars());
?>