<?php
include 'conection.php';

if (isset($_POST['enviado'])) {
    
    $nome = $_POST['consulta1'];
    $description = $_POST['consulta2'];
    $prezo = $_POST['consulta3'];
    $categoria = $_POST['consulta4'];
 
    // Insertamos query
    $query = " INSERT INTO artigo (nome, descripcion, prezo, categoria) 
                VALUES ('$nome', '$description', $prezo, '$categoria')";

    $result = $conn -> query("$query");

    // Comprobamos si se ha borrado nuestra consulta seleccionada
    if ($result === true) {   
        echo "<br>Consulta INSERTADA con éxito";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h3> INSERT - ARTIGO</h3>
    
    <input type="button" onclick="location.href='index.html';" value="INDEX"/>
    <input type="button" onclick="location.href='UnoSELECT.php';" value="SELECT AND DELETE"/>
    <input type="button" onclick="location.href='UnoMODIFY.php';" value="MODIFY"/>

    <form action="UnoINSERT.php" method="POST">
  
        <p>nome:</p> <input type="text" name="consulta1" />
        <p>descripcion:</p> <input type="text" name="consulta2" />
        <p>prezo:</p> <input type="number" name="consulta3" />
        <p>categoria:</p> <input type="text" name="consulta4" />
        <p><input type="submit" value="Enviar" name="enviado"></p>
    </form>
    
 <?php
    
    // Imprimimos tabla
    $query = " SELECT * FROM ARTIGO ORDER BY prezo DESC";

    $result = $conn -> query("$query");

    echo "<table id='all-table' border=1>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nome</th>";
            echo "<th>descripcion</th>";
            echo "<th>prezo</th>";
            echo "<th>categoria</th>";
        echo "</tr>";

    while($row = mysqli_fetch_array($result)){
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