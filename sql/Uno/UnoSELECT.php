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

if (isset($_GET['consulta'])) {
    if ($_GET['consulta'] != '*' || $_GET['consulta'] === '' || $_GET['consulta'] === is_null || empty($_GET['consulta'])) {
        "No se ha escrito un asterisco";
        header('Location: Formu.html');
        exit;

    }

    else if ($_GET['consulta'] === '*') {
        $query = " SELECT ".$_GET['consulta']. " FROM ARTIGO";

        $result = $conn -> query("$query");
        //$conn -> close();


            echo "<table border=1>";
                echo "<tr>";
                    echo "<th>id_artigo</th>";
                    echo "<th>nome</th>";
                    echo "<th>descripcion</th>";
                    echo "<th>prezo</th>";
                    echo "<th>categoria</th>";
                echo "</tr>";

            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['id_artigo'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['prezo'] . "</td>";
                    echo "<td>" . $row['categoria'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
                // Free result set
            mysqli_free_result($result);
    }
}


/**

// Consulta para ver todo lo que hay en tienda
    $query = " SELECT * FROM ARTIGO";

    $result = $conn -> query("$query");
    //$conn -> close();


            echo "<table border=1>";
                echo "<tr>";
                    echo "<th>id_artigo</th>";
                    echo "<th>nome</th>";
                    echo "<th>descripcion</th>";
                    echo "<th>prezo</th>";
                    echo "<th>categoria</th>";
                echo "</tr>";

            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['id_artigo'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['prezo'] . "</td>";
                    echo "<td>" . $row['categoria'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
                // Free result set
            mysqli_free_result($result);
     
*/
else {echo "<br>no se ha escrito un asterisco";}
?>