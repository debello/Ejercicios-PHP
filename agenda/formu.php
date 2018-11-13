<?php
$nome = '';
$var = 'a';

if (isset($_GET[$var])) {
$_GET['gat'] = $_GET[$var];
$_GET[rand(0,1000)] =  $_GET[$var];
$una = $_GET["gat"];

           echo "<br>test GET_GAT " . $_GET["gat"] . "and name1: " . $una;
    echo "<br>get var: $_GET[$var]<br>" . " and var: $var";

    //$_GET['got'] = $name1;
    //$name1 = rand(0,1000);
    //$var = rand(0,1000);
    //echo "test " . $_GET["gat"], $name1;
}

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
                <input type="text" name="<?php echo $var; ?>" value="<?php echo $nome; ?>" /><br>
            
        <input type="submit" name="sub" />
    </form>


<?php

// la variable seteada $var en ABC por ejemplo
// Guardamos ese valor en $name1
    
echo "<br>get var: $_GET[$var]<br>" . " and var: $var";
$name1 = $_GET[$var];
$_GET[$var] = "lol";
$var = rand(0, 10000);


// convertimos $var en un num random    
    
/**    
$_SESSION['word'] = $_GET['nombre1'];
$test1 = $_SESSION['word'];
       unset($_GET['nombre1']);
echo "test testuno " . $test1 . "<br>";
  echo "$test[0] y $test[1]";
      $nome = $_GET['nombre1'];
echo "test nome : $nome";
**/




?>
</body>
</html>


