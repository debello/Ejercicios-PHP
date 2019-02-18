<?php
include ('ex01.php');
/* 
Plantilla para insertar 3 items en la tabla

INSERT INTO `viviendas` (`id`, `nombre`, `precio`) 
VALUES ('01', 'Chalet', '10000'), 
('02', 'Piso', '20000'), ('03', 'Casa', '30000');


*/
?>

<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
</head>
<body>
    
<?php 
    $query = " SELECT * FROM Viviendas";

    // Insertamos nuestra consulta anterior en $result
    $result = $conn -> query("$query"); 
    echo "<div id='both-tables'><table id='all-table' class='both-tables-cl' border=1>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nombre</th>";
            echo "<th>precio</th>";
        echo "</tr>";

    // Generamos tabla y también........
    while($row2 = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td value='count_id'>" . $row2['id'] . "</td>";
            echo "<td>" . $row2['nombre'] . "</td>";
            echo "<td>" . $row2['precio'] . "</td>";
        echo "</tr>";
    }
    
?>
    
</body>
</html>