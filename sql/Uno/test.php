<?php

/**

https://www.formget.com/php-select-option-and-php-radio-button/
http://form.guide/php-form/php-form-select.html

**/
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
	<link rel='stylesheet' type='text/css' href='mystylei.css'>
	<style>
		#btn-index3 {
			background-color: #FFA500;
		}
	</style>
</head>
<body>
    <h3> INSERT - ARTIGO</h3>
    



    
 <?php
    
	/** Functión para buscar según nuestro select **/

	function createTable() {
	 $queryLEL = " SELECT  FROM ARTIGO";

    $result = $conn -> query("$queryLEL");

	
	}

    // Imprimimos tabla
    $queryLEL = " SELECT * FROM ARTIGO";

    $result = $conn -> query("$queryLEL");

		echo "<form action='' method='GET' id='carform'>";

		

		echo "<select form='carform' name='hc' >";
		while($rowLEL = mysqli_fetch_array($result)){
			echo "<option value='" .$rowLEL['id']. "'>" .$rowLEL['nome']. "</option>";
			$prob = $rowLEL['id'];
			echo "probando rowlel:". $rowLEL['nome'];
		}
		echo "</select>";
		echo "</form>";
		
	

	if(isset($_POST['hc'])) {
		echo "probando";
	}




	/*** GENERAR TODA LA TABLA 
    echo "<table id='all-table' border=1>";
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>nome</th>";
            echo "<th>descripcion</th>";
            echo "<th>prezo</th>";
            echo "<th>categoria</th>";
        echo "</tr>";

	$query = " SELECT * FROM ARTIGO";
    $result1 = $conn -> query("$query");

    while($row = mysqli_fetch_array($result1)){
        echo "<tr>";
            echo "<td value='count_id'>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['prezo'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
        echo "</tr>";
    }
    echo "</table>"; ***/
    
    
?>
    
</body>
</html>