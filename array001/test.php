<?php
$al01 = array('ID ' => 'A01', 
        'Datos' => array(
            'Nome: ' => 'Daniel',
            'Apelidos: ' => 'Rabinovich', 
            'Idade: ' => '17'), 
        'Materias' => array(
            'Lingua: ' => 8, 
            'Mates' => 9));


$al02 = array('ID ' => 'A02', 
        'Datos' => array(
            'Nome: ' => 'Marcos',
            'Apelidos: '=>'Mundstock', 
            'Idade: '=>'18'), 
        'Materias' => array(
            'Lingua: '=> 9, 
            'Mates'=> 7));


$al03 = array('ID ' => 'A03', 
        'Datos' => array(
            'Nome: ' => 'Carlos',
            'Apelidos: ' => 'Loper Puccio', 
            'Idade: ' => '16'), 
        'Materias' => array(
            'Lingua: ' => 6, 
            'Mates' => 10));


function alGenerator($a01) {
echo "empezamos " . "<br>" ;
for ($i = 0; $i < 3; $i++) {
    if ($i === 0) {
        echo "<tr><td>";
        echo "alumno ID: " . $a01['ID '] . " y test: " . array_search($a01["ID "], $a01) . "<br> </td>"; /////// PRINTEA EL VALOR Y LUEGO LA CLAVE!
    }
    echo "<br>";
    if ($i === 1) {
          echo "<td>";
        foreach ($a01['Datos'] as $trese => $keyese) { /// PRINTEA EL ARRAY DENTRO DE $A
        
        echo "foreach de $ a01[1] " . $trese . " y " . $keyese . "<br>";
       
        }
         echo "</td>";
    }
    echo "<br>";
    if ($i === 2) {
        
        foreach ($a01['Materias'] as $Ae => $keyo) {
            echo "<td>";
    echo "foreach de $ ao1 key " . $keyo . "<br>"; ///PRINTEA el $A sin [3]
            echo "</td>";
} 
    }
}
    };
alGenerator($al03);






?>