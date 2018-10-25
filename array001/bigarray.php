<?php

$encabezado = ['cod_alumno', 'Datos Persoais', 'Lingua', 'Mates'];
$a01 = array('ID ' => 'A01', 
        'Datos' => array(
            'Apelidos: '=>'Rabinovich', 
            'Idade: '=>'17', 
            'Lingua: '=> 8), 
        'Mates'=> 9);

$a02 = ['ID ' => 'A02',
        'Nome: '=>'Marcos', 
        'Apelidos: '=>'Mundstock', 
        'Idade: '=>'18', 
        'Lingua: '=> 9, 
        'Mates'=> 7];

$a03 = ['ID ' => 'A03', 
        'Apelidos: '=>'Lóper Puccio', 
        'Idade: '=>'16', 
        'Lingua: '=> 6, 
        'Mates'=> 10];


$DatosP = [];




// PRIMERA FILA
echo "<table border='1' cellspacing='1'>";
// LLamamos encabezado con foreach
echo "<tr>";
    foreach ($encabezado as $cabeza) {
        echo "<th>
                $cabeza </th>";
    }
echo "</tr>";
echo "</table>";
// SEGUNDA FILA (PRIMER ALUMNO)

    foreach ($a01 as $alumno1 => $value1) {
        echo $alumno1 . $value1 . "<br>" ;
        foreach ($alumno1 as $alumno2 => $value2) {
    
                echo $alumno2 . $value2 . "<br>" ;
            
        }
    }


echo key($a01);


                
       
    
// LLamamos alumno 1 foreach
    // Datos personales(casilla) es otro for each dentro del foreach

?>