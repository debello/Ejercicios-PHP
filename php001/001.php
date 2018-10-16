<html>
    <head> 
        <title> Horario DAWA 2018-2019 
        </title>
    </head>
<body>
    
<?php
// Creamos un array con los días de la semana 
$days = array(" ", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); 
    
// Creación de la tabla    
echo "<table border='1' cellspacing='2'>
    <tr>"; 
    
//Haremos un bucle for donde por cada elemento del array anterior (days) se creará un cuadro, así hasta que se cree la fila entera        
    for ($i = 0;$i < 8; $i++) {

        echo "<th>" .$days[$i].  "</th>";
	   }
    
    echo "</tr>";
    
// Clases de primera hora todos los días (Sólo se está matriculado en dos asignaturas)
    // en otra fila diferente, debajo de la anterior
    echo "<th> 18:00-18:50 
          <td> Servidor
          <td> Empresa 
          <td> Servidor 
          <td>  
          <td>  
          <td>
          <td>
           ";
    
// Clases de segunda hora todos los días
    echo "<tr>
          <th> 18:50-19:40
          <td> Servidor
          <td> 
          <td> Servidor 
          <td>  
          <td>  
          <td>
          <td>
          </tr>";
        
// Clases de tercera hora todos los días ()
    echo "<tr>
          <th> 20:00-20:50
          <td> Servidor
          <td> 
          <td> Empresa
          <td>  
          <td>  
          <td>
          <td>
          </tr>

</table>";

?>	
</body>
</html>