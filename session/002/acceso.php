<?php

if (!empty($_POST['texto'])) {
    session_start();
    $dato = $_POST['texto'];
    $_SESSION['Primero'] = $dato;

    $a = 0;
    foreach ($_POST as $k) {
        $_SESSION["test$a"] = $k;
        echo $k . "<br>";
        $a++;
    }




}







    
?>
    

</body>
    
</html>