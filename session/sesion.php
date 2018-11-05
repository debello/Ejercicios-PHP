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
    $_SESSION['lal'] = [];
    $_SESSION['lel'] = null;
    $_SESSION['lol'] = "testosterina";
    $_SESSION['acceso'] = true;
    echo "<br>";
    echo " Haz click <a href='acceso.php'>aqui</a> para continuar";
    echo "<br>";
    print_r($_SESSION);
}

?>