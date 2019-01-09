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

$query = " INSERT INTO ARTIGO VALUES (2, 'Mesa', 'Tabla de madera redonda', 25.99, 'Muebles')";

$conn -> query("$query");
$conn -> close();
    


/**
Más info - 
https://www.siteground.com/tutorials/php-mysql/query-database/
*/    

/**

// Creamos tabla ARTIGO
$query = " CREATE TABLE IF NOT EXISTS ARTIGO (
            id_artigo INTEGER(6) NOT NULL auto_increment primary key,
            nome VARCHAR(30), 
            descripcion VARCHAR(255), 
            prezo INTEGER(6), 
            categoria VARCHAR(30)


// Creamos tabla CATEGORIA
$query = " CREATE TABLE IF NOT EXISTS CATEGORIA (
            id_categoria INTEGER NOT NULL auto_increment primary key,
            nome VARCHAR(30)
            )";

// Insertamos un elemento dentro de ARTIGO 
$query = " INSERT INTO ARTIGO VALUES (1, 'Manzana', 'Pieza de fruta verde', 0.40, 'Alimentos')";

*/
    

?>