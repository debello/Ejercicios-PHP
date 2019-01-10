<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <h3> INSERT - ARTIGO</h3>
    
    <input type="button" onclick="location.href='Uno.php';" value="INDEX"/>
    <input type="button" onclick="location.href='UnoSELECT.php';" value="SELECT"/>
    <input type="button" onclick="location.href='UnoDELETE.php';" value="DELETE"/>
    
    <form action="UnoINSERT.php" method="GET">
        <p>id_artigo:</p> <input type="number" name="consulta" />
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
    $id_artigo = $_GET['consulta'];
    $nome = $_GET['consulta1'];
    $description = $_GET['consulta2'];
    $prezo = $_GET['consulta3'];
    $categoria = $_GET['consulta4'];
}
    
    
?>
    
</body>
</html>