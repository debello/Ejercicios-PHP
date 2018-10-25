<?php

$a = [1 => 2, 
      3=>4, 
      4=>5, 
      6=>7];

$b = [1, 2, 3, 4];

$c = [
    array(23,
          42),
    
    array(4,
          5), ];


        

$d = [
    array('uno'=>1, 2=>'dos'), 
    array(4=>'cuatro', 5=>'cinco')];

// combinación de un array de $d con $a
$e = [  1 => 2, 
        5=>4,
        array(1=>'uno', 2=>'dos'), 
        array(4=>'cuatro', 5=>'cinco')];

echo $c[0][1] . "<br>";
$dKeys = array_keys($d);
$dKeys2 = array_keys($d[0]);

echo $d[0] . "<br>";
echo "echo dkeys " . $dKeys[0] . "<br>";
echo "echo dkeys[dkeys] " . $d[$dKeys[0]] . "<br>";
echo "echo dkeys[dkeys] " . $d[$dKeys[1]] . "<br>";

echo "echo dkeys2 " . $dKeys2[0] . "<br>";

echo $e[3][1] . "<br>";


//for ($i = 0; $i < 3; $i++)  {



foreach($d as $datos2)
 	{ 

 		foreach($datos2 as $dato)
 			{
 			echo "$dato ";
 			}

 	echo "<br>";
 	}

    
?>