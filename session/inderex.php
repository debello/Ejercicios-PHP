<?php
    setcookie("last_visit", "primero", (time() + 60 * 60 * 24 * 30));
    

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

<body>
    <form method="post" action="sesion.php">
        <p>Usuario</p>
            <input type="text" name="usuario">
        <br>
        <p>Contrasenia</p>
            <input type="password" name="password">
        <br>
            <input type="submit" name="submit">
    </form>
            
</body>
</html>