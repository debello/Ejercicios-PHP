<?php
include 'conection.php';
    
    
    
if (isset($_GET['enviado'])) {
    
    $nombre = $_GET['consulta'];
    $columna = $_GET['consulta1'];
    $valor = $_GET['consulta2'];
if (!empty($nombre) && !empty($columna) && !empty($valor)) {
   

    echo "aqui tenemos el valor $valor";

    
        // Insertamos query
        $query = " UPDATE artigo
                    SET $columna = '$valor'
                    WHERE nome = '$nombre'";

        $result = $conn -> query("$query");
        //$conn -> close();
            // mysqli_free_result($result);
        
        // Comprobamos si se ha borrado nuestra consulta seleccionada
        if ($result = $conn -> query("$query") === true) {
            echo "svvamos";
            echo "<br>Consulta MODIFICADA con éxito";
        }


}

    else { echo "no has introducido todas las casillas";}

}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h3> MODIFY - ARTIGO</h3>
    
    <input type="button" onclick="location.href='index.html';" value="INDEX"/>
    <input type="button" onclick="location.href='UnoSELECT.php';" value="SELECT AND DELETE"/>
    <input type="button" onclick="location.href='UnoINSERT.php';" value="INSERT"/>
   
    
    <form action="UnoMODIFY.php" method="GET">
  
        <p>Nombre del artículo a modificar: </p> <input type="text" name="consulta" />
        <p>Columna a modificar: </p> <input type="text" name="consulta1" />
        <p>Nuevo valor:</p> <input type="text" name="consulta2" />
        <p><input type="submit" value="Enviar" name="enviado"></p>
    </form>
    
 <?php

    
    $query = " SELECT * FROM ARTIGO";

        $result = $conn -> query("$query");
        //$conn -> close();


            echo "<table id='all-table' border=1>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>nome</th>";
                    echo "<th>descripcion</th>";
                    echo "<th>prezo</th>";
                    echo "<th>categoria</th>";
                echo "</tr>";

            while($row = mysqli_fetch_array($result)){
                //$rows[] = mysqli_fetch_array($result);
                echo "<tr>";
                    echo "<td value='count_id'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['prezo'] . "</td>";
                    echo "<td>" . $row['categoria'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";

    
    
?>
    
</body>
</html>