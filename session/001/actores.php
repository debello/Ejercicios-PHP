<?php
if (isset($_POST['actor']) && !empty($_POST['actor'])){
    setcookie("galleta", $_POST['actor'], time() + (86400 * 30), "/");
    setcookie("galleta2", $_POST['actriz'], time() + (86400 * 30), "/");

        setcookie("prueba", "erayo");
}
else {
    $actor;
    $actriz;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 001</title>  

</head>
<body>
            <form action='actores.php' method='POST' >
            <p>Inserte actor</p>
            <input type='text' name='actor' />
            <p>Inserte actriz</p>
            <input type='text' name='actriz' />
            <input type='submit' />
    
<?php
if (!empty($_POST['actor']) && !empty($_POST['actriz'])){
$actor = $_POST['actor'];
$actriz = $_POST['actriz'];
}

if (isset($_COOKIE['galleta']) && isset($_COOKIE['galleta2'])){
echo "<br>Su actor favorito es:" . $_COOKIE['galleta'] ."<br> su actriz favorita es:". $_COOKIE['galleta2'];
    }
if (!isset($_COOKIE['galleta']) && !isset($_COOKIE['galleta2'])){
    echo "Por favor recargue la página";
}

//<img src="/images/image1.png" width="280" height="125" alt="actor" />
  //  <img src="/images/image1.png" width="280" height="125" alt="actriz" />

 
    
?>
    

</body>
    
</html>