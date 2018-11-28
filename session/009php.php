<?php

$dni = 12345678;

$divisor = $dni / 23;

$noDecimals = floor($divisor);
$dniDeci = $noDecimals * 23;
$resto = $dni - $dniDeci;

echo "dni número $dni <br>";
echo "<br>divisor: " . $divisor . "<br>";
echo "nodecimals: " . $noDecimals . "<br>";
echo "nodecimals * 23: $dniDeci";
echo "<br>resto " . $resto ."<br>";

switch ($resto) {
        
    case 0:
        echo "La letra de $dni es T";
        break;
    case 1:
        echo "La letra de $dni es R";
        break;
    case 2:
        echo "La letra de $dni es W";
        break;
    case 3:
        echo "La letra de $dni es A";
        break;
    case 4:
        echo "La letra de $dni es G";
        break;
    case 5:
        echo "La letra de $dni es M";
        break;
    case 6:
        echo "La letra de $dni es Y";
        break;
    case 7:
        echo "La letra de $dni es F";
        break;
    case 8:
        echo "La letra de $dni es P";
        break;
    case 9:
        echo "La letra de $dni es D";
        break;
    case 10:
        echo "La letra de $dni es X";
        break;
    case 11:
        echo "La letra de $dni es B";
        break;
    case 12:
        echo "La letra de $dni es N";
        break;
    case 13:
        echo "La letra de $dni es J";
        break;
    case 14:
        echo "La letra de $dni es Z";
        break;
    case 15:
        echo "La letra de $dni es S";
        break;
    case 16:
        echo "La letra de $dni es Q";
        break;
    case 17:
        echo "La letra de $dni es V";
        break;
    case 18:
        echo "La letra de $dni es H";
        break;
    case 19:
        echo "La letra de $dni es L";
        break;
    case 20:
        echo "La letra de $dni es C";
        break;
    case 21:
        echo "La letra de $dni es K";
        break;
    case 22:
        echo "La letra de $dni es E";
        break;
        
}
    
    



?>