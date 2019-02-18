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
/* PRIMERO mostramos TABLA*/

$query = " SELECT * FROM Viviendas";

// Insertamos nuestra consulta anterior en $result
$result = $conn -> query("$query"); 
echo "<p> <strong>RECARGAR LA PAGINA DESPUES DE BORRAR</strong> </p>
<div id='both-tables'><table id='all-table' class='both-tables-cl' border=1>";
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


/* Vemos si hemos introducido un nombre y realizamos consulta  */

if (isset($_GET['enviado'])) {
    
    $nombre = $_GET['consulta'];

    // Si hemos enviado el formulario y rellenado las 3 casillas
    if (!empty($nombre)) {
        // Declaramos una query SQL
        $query = " DELETE FROM Viviendas
                    WHERE nombre = '$nombre'";
        
        // La insertamos en una variable
        $result = $conn -> query("$query");

        // Si ha sido insertada sin problemas...
        if ($result === true) {   
            echo "<br>Consulta BORRADA con éxito";
            
        }
    }

    else { echo "Error. No se ha borrado nada";
    }
}


/* DELETE - BORRAR - Damos a elegir qué borrar según el nombre del producto */

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <p>Nombre del artículo a borrar: </p> <input type="text" name="consulta" />
        <p><input type="submit" value="Enviar" name="enviado"></p>
    </form>
    
</body>
</html>