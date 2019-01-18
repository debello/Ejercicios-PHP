<?php
///////////////////////////////////
////////// OUTDATED ///////////////
///////// ver UnoSELECT.php ///////
///////////////////////////////////
//////////////////////////////////

include 'conection.php';




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


            $query = " SELECT * FROM artigo";
            $result = $conn -> query("$query");
                        print_r($result);
    echo "<br>";

          
    
    
    
    
    /**




    */
    
    
    
    

    

  
        //$conn -> close();


            echo "<table id='all-table' border=1>";
                echo "<tr>";
                    echo "<th>id_artigo</th>";
                    echo "<th>nome</th>";
                    echo "<th>descripcion</th>";
                    echo "<th>prezo</th>";
                    echo "<th>categoria</th>";
                echo "</tr>";
    
            while($row = mysqli_fetch_assoc($result)){
                //$rows[] = mysqli_fetch_array($result);
                echo "<tr>";
                    echo "<td value='count_id'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['prezo'] . "</td>";
                    echo "<td>" . $row['categoria'] . "</td>";
                echo "</tr>";
            }
    
            print_r($result);
            while($row1 = mysqli_fetch_row($result)){
                //$rows[] = mysqli_fetch_array($result);
                echo "<tr>";
                    echo "<td value='count_id'>" . $row1['id'] . "</td>";
                    echo "<td>" . $row1[0] . "</td>";
                    echo "<td>" . $row1['descripcion'] . "</td>";
                    echo "<td>" . $row1['prezo'] . "</td>";
                    echo "<td>" . $row1['categoria'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
    
    
    
    
    
    
    /**




    
    
    
    

    

  
        //$conn -> close();

    $queryx = "SELECT id FROM artigo";
    $resultx = $conn ->query($queryx);
        print_r($resultx);
    var_dump($resultx);
            echo "<table id='all-table' border=1>";
                echo "<tr>";
                    echo "<th>id_artigo</th>";
                echo "</tr>";
        
            while($row2 = mysqli_fetch_array($resultx)){
                //$rows[] = mysqli_fetch_array($result);
                echo "<tr>";
                    echo "<td value='count_id'>" . $row2['id'] . "</td>";

                echo "</tr>";
            }
            echo "</table>";
        


       
        
            Mirar SELECT, r3, 2 y porque no va la tabla




*/



?>
    </body>
</html>