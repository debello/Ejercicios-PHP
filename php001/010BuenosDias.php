<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php 

// Obtenemos la hora sin minutos mediante el formulario
    $hora = $_GET['a'];

switch ($hora) { // Igual que el último CASE pero incluyendo a 0
    case ($hora === 0):
        echo "La hora está entre las 20pm y las 5am <br>";
        echo "Son la(s) " . date("$hora:i:") . "<br> "; 
        echo "Buenas noches!";
    break;

// Si la hora introducida es mayor que 5 pero menor que 12...
    case ($hora > 5) && ($hora < 12):
        $hora = 00;
        echo "La hora está entre las 6am y las 11am <br>";
// Introducimos la hora escrita $hora y de forma automática los minutos :i:
        echo "Son la(s) " . date("$hora:i:") . "<br> "; 
        echo "Buenos días!";
    break;
        
    case ($hora > 11) && ($hora < 20):
        echo "La hora está entre las 12pm y 19pm <br>";
        echo "Son la(s) " . date("$hora:i:") . "<br> "; 
        echo "Buenas tardes!";
    break;

// Si la hora es mayor que 19, menos que 24 OR mayor o igual que 00 y menor que 6
    case ($hora > 19) && ($hora < 24) || ($hora >= 00) && ($hora < 6) :
        echo "La hora está entre las 20pm y las 5am <br>";
        echo "Son la(s) " . date("$hora:i:") . "<br> "; 
        echo "Buenas noches!";
    break;

// Si el usuario falla en escribir una hora en el rango de 00 a 23...
    default:
        echo "La hora escrita no está entre 00 y 24";
        // NOTA [!] No consigo que al escribir 0 (no 00) salga esta excepción en pantalla
}    
    
    ?>
</body>
</html>