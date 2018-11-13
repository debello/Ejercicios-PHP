<?php
  $nome = $_GET['nombre1'];
if(isset($_GET['sub'])){
  
  
  $test[] = $nome;

};

/**    $nome = $_GET['nombre1'];
    $test[] = $nome;
    echo "$test[0] y $test[1]";
    unset($_GET['nombre1']);
**/
    

?>



   


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h3>AGENDA</h3>


    <form action="" method="GET">

        

        <p> Introduzca un Nombre</p>
                <input type="text" name="nombre1" /><br>
            
        <input type="submit" name="sub" />
    </form>
<?php
  echo "$test[0] y $test[1]";
      $nome = $_GET['nombre1'];
echo "test nome : $nome";





?>
</body>
</html>


