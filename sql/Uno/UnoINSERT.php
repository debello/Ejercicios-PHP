<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h3> INSERT - ARTIGO</h3>
    
    <input type="button" onclick="location.href='index.html';" value="INDEX"/>
    <input type="button" onclick="location.href='UnoSELECT.php';" value="SELECT AND DELETE"/>
   
    
    <form action="UnoINSERT.php" method="GET">
  
        <p>nome:</p> <input type="text" name="consulta1" />
        <p>descripcion:</p> <input type="text" name="consulta2" />
        <p>prezo:</p> <input type="number" name="consulta3" />
        <p>categoria:</p> <input type="text" name="consulta4" />
        <p><input type="submit" value="Enviar" name="enviado"></p>
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
if (isset($_GET['enviado'])) {
    
    $nome = $_GET['consulta1'];
    $description = $_GET['consulta2'];
    $prezo = $_GET['consulta3'];
    $categoria = $_GET['consulta4'];

    

 
        // Insertamos query
        $query = " INSERT INTO artigo (nome, descripcion, prezo, categoria) 
                    VALUES ('$nome', '$description', $prezo, '$categoria')";

        $result = $conn -> query("$query");
        //$conn -> close();
            // mysqli_free_result($result);
        
        // Comprobamos si se ha borrado nuestra consulta seleccionada
        if ($result = $conn -> query("$query") === true) {
            echo "svvamos";
            echo "<br>Consulta INSERTADA con éxito";
        }




}
    
    
?>
    
</body>
</html>