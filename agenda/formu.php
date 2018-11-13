<?php
    if (!empty($_POST['personas'])) {
        echo "POST personas is set";
        $array = explode(", ", $_POST['personas']);
        echo "<br> array: $array[0] $array[1]";
    }
    else {
        echo "POST personas is NOT set";
        $array = [];
        $pos = 0;
    }

        echo "<br> nombre:" . $_POST['nombre'];

//foreach ($_SESSION as $k) {
//    echo "<br> $k, <br>"; 
//}
 
$nome = $_POST['nombre'];

?>



   


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h3>AGENDA</h3>



    <form action="" method="POST">

        

        <p> Introduzca un Nombre</p>
                <input type="text" name="nombre"/><br>
                <input type="hidden" name="personas" value="<?php echo $nome; ?>" /><br>
            
            <input type="submit" name="sub" />
    </form>


<?php
$test = $_POST['nombre'];
$_POST['personas'] = $test;



?>
</body>
</html>


