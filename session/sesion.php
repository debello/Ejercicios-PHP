<?php

$last_visit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] :  "Primera vez";
$current_visit = date("c");
setcookie("last_visit", date("c"), (time() + 60 * 60 * 24));



?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

<body>


<?php

    $pass = $_POST['password'];
    $usuario = $_POST['usuario'];

if (empty($pass) && empty($usuario)) {
    echo "Algún campo está vacío";
    }
else {
    echo "datos introducidos correctamente, bienvenido $usuario";
    $_SESSION['lul'] = true;
    session_start();
setcookie("nombre", "valor", time() + 86400, "/");
    echo "<br><strong>Probando el echo de WEB COOKIE: </strong>" .  $_COOKIE['last_visit'];
    echo "<br><strong>Probando el echo de WEB \$last : </strong>" .  $last_visit;
    echo "<br><strong>Probando el echo de WEB \$current: </strong>" .  $current_visit;
echo "<br>Probando el echo de nuestra cookie: " .  $_COOKIE['nombre'];
    
setcookie("nombre1", "valor1", time() + 86400);
echo "<br>Probando el echo de nuestra cookie: " .  $_COOKIE['nombre1'];

    $_SESSION['lal'] = [];
    $_SESSION['lel'] = null;
    $_SESSION['lal1'] = date('d-m-Y');
    $_SESSION['lol'] = "testosterina";
    $_SESSION['acceso'] = true;
    
    echo "<br>";
    echo " Haz click <a href='acceso.php'>aqui</a> para continuar";
    echo "<br>";
    print_r($_SESSION);
}

?>
    
</body>
</html>