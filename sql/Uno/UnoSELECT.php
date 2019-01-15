<?php
// https://www.figma.com/file/0vaS8KnENMueMCO1AO01hGHu/Untitled?node-id=0%3A1


/// => ADD BUTTON TO DROP ALL TABLE
/// SHOW SECOND TABLE (categories) and link them w foreign KEY
// Añadir FLOAT al PRICE :> ALTER TABLE MOFIY COLUMN SDFKSIDFNMSAD

include 'conection.php';


if (isset($_POST['DEL'])){
    $b1 = $_POST['DEL'];
    echo "<br> $b1 <br>";
    
    $query = " DELETE FROM artigo
                WHERE id = '$b1'";

    $result4 = $conn -> query("$query");
      
    // Recargar la página cada vez que se pulse un botón
    //  header("Refresh:0");

    
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
    
    #buttons {
        height: 50px;
    }
    #buttons #per-button {
        position: relative;
        margin: -1px;
        
    }
    #per-button {
        height: 20.4px;
        left: 33.33%;
    }
    #all-table {
        position: relative;
        float: left;
    }
    
    #btn-index {
        position: relative;
        border-bottom; 5px;
    }
    #price {
        position:relative;
       
  
        display: block;
    }
    
    #p1 {
        margin: 5px;
    }
    #p2 {
        margin: 5px;
    }
    #p3 {
        margin: 5px;
    }
    
</style>
</head>
<body>
    <h3> SELECT AND DELETE - Artigo</h3>
    
    <input id='btn-index' type="button" onclick="location.href='index.html';" value="INDEX"/>
    <input id='btn-index' type="button" onclick="location.href='UnoINSERT.php';" value="INSERT"/>

    
    
<div></div>
    



<?php


    
///////////////////
//////////////////
// Asignamos el asterisco a consulta para que cargue la página con todos los artículos//
    

   

        
        if (isset($_POST['Prezo_DESC'])) {
        $query = " SELECT * FROM artigo ORDER BY prezo DESC";

        }
        
        else if (isset($_POST['Prezo_ASC'])) {
        $query = " SELECT * FROM artigo ORDER BY prezo ASC";

            
        }
        else if (isset($_POST['Prezo_Defecto'])) {
        $query = " SELECT * FROM ARTIGO";
            }
                                             

        else if (isset($_POST['truncate-table'])) {
            $query = "TRUNCATE TABLE artigo";
            }
    
        else {
            $query = " SELECT * FROM artigo";
            }
    
        $result = $conn -> query("$query");
        //$conn -> close();


            echo "<table id='all-table' border=1>";
                echo "<tr>";
                    echo "<th>id_artigo</th>";
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
        


        

       // Recoge todas las IDs de nuestra tabla
        $query3 = " SELECT id FROM artigo LIMIT 1";

        $result = $conn -> query("$query");
        while($row = mysqli_fetch_array($result)){
        $test[] = $row['id'];
        }
        
        // How many rows? $num
        $query2 = "SELECT * FROM artigo";
        if ($result2 = mysqli_query($conn, $query2)){
            $num = mysqli_num_rows($result2);
 
        }
        echo "<table id='buttons' border=1 >";
        echo "<tr><td>DELETE</td></td>";
        
        
        // For each row ($num)
        for ($i = 0; $i < $num; $i++){
        
    
        echo "
                <form action='' method='POST'>        
                    <tr>
                        <td><input id='per-button' type= 'submit'
                        name='DEL'  value='"
                            ."$test[$i]".            "' /></td>
                    </tr>    
                </form>
        ";
        }
        echo "</table>";
    echo "<br>";
       // if (isset($_POST['Prezo_DESC'])) {
            echo "<div id='price'>";
            echo "<form action='' method='POST'>
                <input  type='submit' name='Prezo_ASC' value='Ordenar prezo ASC' />
                </form></div>";
       // }
    
       // else if (isset($_POST['Prezo_ASC'])) {
            echo "<div id='price'>";
            echo "<form action='' method='POST'>
                <input  type='submit' name='Prezo_DESC' value='Ordenar prezo DESC' />
                </form></div>";
      //  }

       // else {
            echo "<div id='price'>";
            echo "<form action='' method='POST'>
                <input  type='submit' name='Prezo_Defecto' value='Por Defecto' />
                </form></div>";
    
            echo "<form action='' method='POST'>
                <input id='borrar' type='submit' name='truncate-table' value='Borrar Tabla' />
                </form>";
            
       // }
    
    



    
    
 
// Asignar a cada botón (button1, button2) que borre
// la id asignada (1, 2)
//

    
    
    
    
    
    
    
    
    
    
    
/**

 
    // Insertar BACKUP tabla con contenidos
    // Sin usar COLUMNA id (y convirtiéndola en primary key para el autoincrement)


    INSERT INTO `artigo` (`nome`, `descripcion`, `prezo`, `categoria`) VALUES
    ('Manzana', 'Pieza de fruta verde', 0, 'Alimentos'),
    ('Silla', 'Cuatro patas con tabla', 15, 'Muebles'),
    ('Mesa', 'Tabla de madera redonda', 26, 'Muebles'),
    ('Aspiradora', 'Artefacto para limpiar suelos', 11, 'Electrodomésticos');

    --
    -- Índices para tablas volcadas
    --

    --
    -- Indices de la tabla `artigo`
    --
    ALTER TABLE `artigo`
      ADD PRIMARY KEY (`id`);
    COMMIT;

*/


?>
    </body>
</html>