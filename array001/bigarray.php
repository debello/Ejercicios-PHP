<?php

$encabezado = ['cod_alumno', 'Datos Persoais', 'Lingua', 'Mates'];





 
echo "<table border='1' cellspacing='1'>";
// LLamamos encabezado con foreach
echo "<tr>";
    foreach ($encabezado as $cabeza) {
        echo "<th>
                $cabeza </th>";
    }
echo "</tr>";


$al01 = array('ID: ' => 'A01', 
        'Datos' => array(
            'Nome: ' => 'Daniel',
            'Apelidos: ' => 'Rabinovich', 
            'Idade: ' => '17'), 
        'Materias' => array(
            'Lingua: ' => 8, 
            'Mates' => 9));


$al02 = array('ID: ' => 'A02', 
        'Datos' => array(
            'Nome: ' => 'Marcos',
            'Apelidos: '=>'Mundstock', 
            'Idade: '=>'18'), 
        'Materias' => array(
            'Lingua: '=> 9, 
            'Mates'=> 7));


$al03 = array('ID: ' => 'A03', 
        'Datos' => array(
            'Nome: ' => 'Carlos',
            'Apelidos: ' => 'Loper Puccio', 
            'Idade: ' => '16'), 
        'Materias' => array(
            'Lingua: ' => 6, 
            'Mates' => 10));


function alGenerator($notas) {
echo "empezamos " . "<br>" ;
for ($i = 0; $i < 3; $i++) {
    if ($i === 0) {
        echo "<tr><td>";
        echo array_search($notas["ID: "], $notas) .  $notas['ID: '] . "<br> </td>"; /////// PRINTEA EL VALOR Y LUEGO LA CLAVE!
    }
    echo "<br>";
    if ($i === 1) {
          echo "<td>";
        foreach ($notas['Datos'] as $trese => $keyese) { /// PRINTEA EL ARRAY DENTRO DE $A
        
        echo "Datos " . $trese . " y " . $keyese . "<br>";
       
        }
         echo "</td>";
    }
    echo "<br>";
    if ($i === 2) {
        
        foreach ($notas['Materias'] as $Ae => $keyo) {
            echo "<td>";
    echo "Materias " . $keyo . "<br>"; ///PRINTEA el $A sin [3]
            echo "</td>";
} 
    }
}
    };
alGenerator($al03);

    
echo "</table>";

?>