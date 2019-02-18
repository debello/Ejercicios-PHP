<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
</head>
<body>
    
<?php 


/* METODO ORIENTADO A OBJETOS MYSQLI */

$servername = "localhost";
// El usuario que uséis (este es el que trae por defecto, administrador)
$username = "root";
// Esta contraseña está vacía
$pass = "";
// Nombre de mi base de datos
$database = "Examen";

// Cremos la conexión
$conn = new mysqli($servername, $username, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die("<p>Conexion fallida: " . $conn -> connect_error) ."</p><br>";
}
else {
    echo "<p>Método orientado a objetos conectado con éxito. </p><br>";
}


/* METODO PDO 

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Examen", $username, $password); // Ponemos el nombre de la DB a mano (examen)
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Método PDO Conectado con éxito"; 
    }
catch(PDOException $e)
    {
    echo "Conexión fallida";
    }

    */

    
?>
    
</body>
</html>