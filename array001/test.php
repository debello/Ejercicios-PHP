
<?php

 for( $b = 0; $b < 3; $b++ ) { // Loop nivel 3
	 for( $a = 0; $a < 5; $a++ ) { // Loop nivel 2
         echo " publish nivel 2 \$a  " . $a . "<br>";
         for( $i = 0; $i < 10; $i++ ) { // Loop nivel 1
              echo " publish nivel 1 \$i  " . $i . "<br>";
                 if ($i == 2) {
                     break 2; // Break detiene, desde $i == 2, toda ejecución del loop nivel 1
                     echo "\$i de nivel 1: " . $i . "<br>";
                 } 
             echo "fuera IF \$i de nivel 1: " . $i . "<br>";
         }
        echo "\$a de nivel 2: " . $a . "<br>";
		echo "end of loop <br>"; // Se sigue ejecutando esta linea que pertenece a loop nivel 2
 	}
     echo "\$b de nivel 3: " . $b . "<br>";
 }
echo "test magic quotes '' \"";
/**
Break 1 Desde la linea detiene todo el nivel 1 del BREAK para abajo
Break 2 Desde la linea detiene todo el nivel 2 del BREAK para abajo
Break 3 Desde la linea detiene todo el nivel 3 del BREAK para abajo

Continue detiene la ejecución actual y continúa la siguiente del loop/nivel selecionado (1)
Continue  === Continue 1
Continue 2 Continue detiene la ejecución actual y continúa la siguiente del loop/nivel selecionado (2)
*/
sdfsadf;asdfasdfsadfuidsfa dfas
    echo hola 


?>