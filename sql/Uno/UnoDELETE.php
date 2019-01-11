<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h3> DELETE - ARTIGO</h3>
    
    <input type="button" onclick="location.href='Uno.php';" value="INDEX"/>
    <input type="button" onclick="location.href='UnoSELECT.php';" value="SELECT"/>
    <input type="button" onclick="location.href='UnoINSERT.php';" value="INSERT"/>
    
    <form action="UnoDELETE.php" method="GET">
    <p>Escriba la columna (id, name o categoría): <input type="text" name="consulta">
    <p>Escriba el valor a eliminar (01, Manzana o Fruta): <input type="text" name="consulta2">
    <input type="submit" value="Enviar"></p>
</form>
    
    
<?php

$servername = "localhost";
// El usuario que uséis (este es el que trae por defecto, administrador)
$username = "root";
// Esta contraseña está vacía
$pass = "";
// Nombre de mi base de datos
$database = "uno";

// Create conection
$conn = new mysqli($servername, $username, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}
else {
    echo "Connected successfully. <br>";
}

$consulta = $_GET['consulta'];
$consulta2 = $_GET['consulta2'];
    
    // Comprobamos consulta (columnas) y consulta2 (valores)
if (isset($_GET['consulta']) && isset($_GET['consulta2']) ) {
    echo "sv1";
    // Comprobamos que 'consulta' coincida con uno de los valores (id, nome, categoria)
    if ($_GET['consulta'] === 'id_artigo' || $_GET['consulta'] === 'nome' || $_GET['consulta'] === 'categoria') {
        echo "sv2";
        // Insertamos query
        $query = " DELETE FROM artigo WHERE  ".$_GET['consulta']. " = '$consulta2'";

        $result = $conn -> query("$query");
        //$conn -> close();
            // mysqli_free_result($result);
        
        // Comprobamos si se ha borrado nuestra consulta seleccionada
        if ($result = $conn -> query("$query") === true) {
            echo "svvamos";
            echo "<br>Consulta borrada con éxito";
        }
    }
}
else {
    echo "<br>No se ha escrito nada";
}
    echo "sv3";
?>

    
    
</body>
</html>