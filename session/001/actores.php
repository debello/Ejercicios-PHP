<?php
    setcookie("galleta", $_POST['actor'], time() + (86400 * 30), "/");
    setcookie("galleta2", $_POST['actriz'], time() + (86400 * 30), "/");

        setcookie("prueba", "erayo");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 001</title>  
</head>
<body>
    
<?php
if (!empty($_POST['actor']) && !empty($_POST['actriz'])){
$actor = $_POST['actor'];
$actriz = $_POST['actriz'];
}

if (isset($_COOKIE['galleta']) && isset($_COOKIE['galleta2'])){
echo "Su actor favorito es:" . $_COOKIE['galleta'] ."<br> su actriz favorita es:". $_COOKIE['galleta2'];
    }
if (!isset($_COOKIE['galleta']) && !isset($_COOKIE['galleta2'])){
    echo "Por favor recargue la página";
}

//<img src="/images/image1.png" width="280" height="125" alt="actor" />
  //  <img src="/images/image1.png" width="280" height="125" alt="actriz" />

 
    
?>
    

</body>
    
</html>