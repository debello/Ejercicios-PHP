<?php
    if(isset($_POST['actor']) && isset($_POST['actriz'])){
    setcookie("galleta", $_POST['actor'], time() + (86400 * 30), "/");
    setcookie("galleta2", $_POST['actriz'], time() + (86400 * 30), "/");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 001</title>  
</head>
<body>

    <form action="" method="POST">
        
    <p>Introduzca Actor:</p>
    <input type="text" name="actor"/><br>
    <p>Introduzca Actriz:</p>
    <input type="text" name="actriz"/><br>
    <input type="submit"/>
        
    <p>Si Ud ya ha rellenado este formulario con anterioridad, clique Submit Directamente</p>
    
    </form>
    
    <?php
    if (!empty($_POST['actor']) && !empty($_POST['actriz'])){
        $actor = $_POST['actor'];
        $actriz = $_POST['actriz'];
        }

        if (isset($_COOKIE['galleta']) && isset($_COOKIE['galleta2'])){
        echo "Su actor favorito es:" . $_COOKIE['galleta'] ."<br> su actriz favorita es:". $_COOKIE['galleta2'];
            }
        if (!isset($_COOKIE['galleta']) && !isset($_COOKIE['galleta2']) && isset($_POST['actor']) && isset($_POST['actriz']) &&
        $_POST['actor'] != '' && $_POST['actriz'] != '')
           
           
            {
            echo "Cookie no implantada. Por favor recargue la página";
        }
    
    
    ?>

    

</body>
    
</html>