<?php
/*
Extraia o nome do ficheiro dunha ruta
Exemplo de entrada : 'www.exemplo.com/public_html/index.php' --> Exemplo de saída : 'index.php' 

Pista extra --> Tamén se pode facer de xeito máis áxil coa función basename
*/

// Defino la ruta en un string para el ejemplo 1
$ruta = "Home/Usuario/Carlos/Escritorio/Ciencia/Planetas.txt";

// Defino la ruta dentro del método pathinfo para el ejemplo 2
$ruta2 = pathinfo("Home/Usuario/Carlos/Escritorio/Ciencia/Planetas.txt");

// Ejemplo 1: Basename imprime automáticamente la parte final de la ruta
echo "<strong>Usando basename:</strong> <br>" . basename($ruta) . "<br><br>";

// Ejemplo 2: Tras usar pathinfo en nuestra variable podemos usar distintas palabras clave para conseguir distintos propósitos. En este caso usaremos "basename"
echo "<strong>Usando pathinfo:</strong> <br>" . $ruta2["basename"] . "<br><br>";

// Ejemplo 3: Método personal. Usar explode para convertir la ruta en un array y acto seguido hacer un echo de la última posición de nuestro array (que sería el nombre del fichero)

echo "<strong>Usando método personal:</strong> <br>";
$trozos = explode("/", $ruta);

// La última posición del array es $trozos[5] y queremos conseguirla automáticamente mediante el método sizeof (o count) pero el resultado dará 6 (no cuenta desde 0) así que le restamos uno para obtener nuestro 5
echo $trozos[sizeof($trozos)-1];

?>