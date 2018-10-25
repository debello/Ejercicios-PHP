<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <style>
    td { text-align: center;
    }
    #data { text-align: left;
        
        }
    
    </style>
</head>
<body>


<?php

$encabezado = ['cod_alumno', 'Datos Persoais', 'Lingua', 'Mates'];





 
echo "<table border='1' cellspacing='1' align='center'>";
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

$listaAl = [$al01, $al02, $al03];

function alGenerator($notas) {

for ($i = 0; $i < 3; $i++) {
    if ($i === 0) {
        echo "<tr><td>";
        echo array_search($notas["ID: "], $notas) .  $notas['ID: '] . "<br> </td>"; 
    }
    
    if ($i === 1) {
        echo "<td id='data'>";
        foreach ($notas['Datos'] as $trese => $keyese) {
        
        echo $trese . $keyese . "<br>";
       
        }
         echo "</td>";
    }
    
    if ($i === 2) {
        
        foreach ($notas['Materias'] as $Ae => $keyo) {
            echo "<td>";
    echo "  " . $keyo . "<br>"; 
            echo "</td>";
} 
    }
}
    };
alGenerator($al01);
alGenerator($al02);
alGenerator($al03);

    
echo "</table>";
/**
A nota mais alta do grupo en lingua é 9, obtida por o alumno Marcos Mundstock
 a nota mais alta do grupo en mates é 10, correspondente ao alumno Carlos Lopez
o alumno coa media mais alta do grupo é Daniel Rabinovich, coa nota media de 8,5
*/


echo "<br>" . $al01['Materias']['Mates'] . "<br>"; // Print 9

$alKey = array_keys($al01); 
echo " tost $alKey[2]" . "<br>"; // Print Id, Datos MATERIAs 0 1 2

$materias = array_keys($al01[$alKey[2]]); // Busca 3er puesto de las primeras keys
echo " tes $materias[1]" . "<br>"; // Print MATERIAs Lingua y Mates 0 1

$hola3 = array_keys($al01[$alKey[1]]) ; 
echo " $hola3[1]" . "<br>"; // Print Nome Apelidos Idade



//foreach ($notas['Materias'] as $Mat => $Num) {
  //  echo "<br> a nota máis alta do grupo en $Mat es de un $Num <br>";
//}
//}

///// ORDEN ALFABETICO 
function Alphanum($alum1, $alum2, $alum3) {
    $alumName = $alum1['Datos']['Nome: '] . " " . 
                $alum1['Datos']['Apelidos: '] . ", " . 
                $alum2['Datos']['Nome: '] . " " . 
                $alum2['Datos']['Apelidos: '] . ", " . 
                $alum3['Datos']['Nome: '] . " " . 
                $alum3['Datos']['Apelidos: '];   
    
    $exploded = explode(", ", $alumName);
    sort($exploded);
    $imploded = implode(", ", $exploded);
    return $imploded . ".";
    
}

echo "El orden alfabético de los alumnos es: " . Alphanum($al01, $al02, $al03) . "<br>";
///////////////////
/////////////////// ORDEN NOTA


//Ahora en funcion
function notAlta($alum1, $alum2, $alum3) {
    $alumNotas =  
            $alum1['Materias']['Lingua: '] . ", " . 
            $alum2['Materias']['Lingua: '] . ", " . 
            $alum3['Materias']['Lingua: '];  
    $exploded = explode(", ", $alumNotas);
    
    rsort($exploded);
        

    
    $listaAl = [$alum1, $alum2, $alum3];
  
    for ($i = 0; $i < 3; $i++){
    if ($exploded[0] == $listaAl[$i]['Materias']['Lingua: ']) {
        //echo "lolecho " . $listaAl[$i]['Materias']['Lingua: '] . " " . $listaAl[$i]['Datos']['Nome: '];
        
   
        
        return $listaAl[$i]['Materias']['Lingua: '] . " obtida por " . $listaAl[$i]['Datos']['Nome: '] . " " . $listaAl[$i]['Datos']['Apelidos: '];

    
    }
        
    }
    
}
 
echo "A nota máis alta do grupo en $materias[0] é " . notAlta($al01, $al02, $al03);



?>


</body>
</html>