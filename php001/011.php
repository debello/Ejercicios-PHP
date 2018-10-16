<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php 

// Recibimos el número     
    $dia = $_GET['a'];
    
// Sobre la variable $dia...
switch ($dia) {
        

        
//Si su valor es 1 entonces imprimimos...     
    case 1:
    echo "El día de la semana es Lunes" . "<br> "; 
    break;
        
//Si su valor número es 2 entonces imprimimos...     
    case 2:
    echo "El día de la semana es Martes" . "<br> "; 
    break;
        
    case 3:
    echo "El día de la semana es Miércoles" . "<br> "; 
    break;

    case 4:
    echo "El día de la semana es Jueves" . "<br> "; 
    break;
        
    case 5:
    echo "El día de la semana es Viernes" . "<br> "; 
    break;
        
    case 6:
    echo "El día de la semana es Sábado" . "<br> "; 
    break;
        
    case 7:
    echo "El día de la semana es Domingo" . "<br> "; 
    break;

//Si el número no es del 1 al 7 entonces imprimimos...
    default:
        echo "No se ha introducido un número del 1 al 7";
        
}    
    
    ?>
</body>
</html>