<?php

// Recogemos los 20 números escogidos por el cliente desde el html
$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$a3 = $_GET['a3'];
$a4 = $_GET['a4'];
$a5 = $_GET['a5'];
$a6 = $_GET['a6'];
$a7 = $_GET['a7'];
$a8 = $_GET['a8'];
$a9 = $_GET['a9'];
$a10 = $_GET['a10'];
$a11 = $_GET['a11'];
$a12 = $_GET['a12'];
$a13 = $_GET['a13'];
$a14 = $_GET['a14'];
$a15 = $_GET['a15'];
$a16 = $_GET['a16'];
$a17 = $_GET['a17'];
$a18 = $_GET['a18'];
$a19 = $_GET['a19'];
$a20 = $_GET['a20'];

// Creamos tres arrays, el primero (números naturales) se basará en los 20 números anteriormente citados
$numarray = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20];

// Los otros dos arrays (números cuadrados y cubos) estarán vacíos por ahora
$numarraycuadrado = [];
$numarraycubo = [];

// Con un loop rellenamos los dos arrays anteriores
// de 0 a 19 (20 números), copiarán los números del array de num. naturales
// y los irán almacenando en el mismo orden
// mientras aplican la fórmula escogida (**2 como elevar al cuadrado y **3 al cubo)
for ($i = 0; $i < 20; $i++) {
    
    $numarraycuadrado[$i] = ($numarray[$i]**2);
    $numarraycubo[$i] = ($numarray[$i]**3);
}


echo "<table border='1' cellspacing='2'>
 
    <tr> 
        <th> Naturales
        <th> Cuadrados
        <th> Cubos
    </tr>";

// Publicaremos en fila el primer número de los 3 arrays 
    // Por ejemplo, 3 como núm natural, 9 como cuadrado y 27 como cubo
for ($i=0;$i<20;$i++) {
    echo "<tr>"; 

    	echo "<td>" .$numarray[$i].  "</td> ";
        echo "<td>" .$numarraycuadrado[$i].  "</td> ";
		echo "<td>" .$numarraycubo[$i].  "</td>";
			
    echo "</tr>";
	}

echo "</table>";

?>