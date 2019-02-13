<?php

/** 
* - Crea objetos y clases sobre algún tema -
* 
* Crea la clase DadoPoker. Las caras de un dado de poker tienen las 
* siguientes figuras: As, K, Q, J, 7 y 8 .
* 
* Crea el método tira() que no hace otra cosa que tirar el dado, 
* es decir, genera un valor aleatorio para el objeto al que se le 
* aplica el método.
* 
* Crea también el método nombreFigura(), que diga cuál es la figura 
* que ha salido en la última tirada del dado en cuestión.
* 
* Crea, por último, el método getTiradasTotales() que debe mostrar 
* el número total de tiradas entre todos los dados.
* Realiza una aplicación que permita tirar un cubilete con cinco 
* dados de poker
* **/

?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php 

    // Crea clase Dadopoker con AS K Q J 7 8
    class DadoPoker {
        public $c1 = 'AS';
        public $c2 = 'J';
        public $c3 = 'Q';
        public $c4 = 'K';
        public $c5 = '7';
        public $c6 = '6';
        public $nombreFigura;
        public $getTiradasTotales;

        // Crea metodo tira que genera un valor aleatorio
        public function tira() {
            $arrayDado = [$this->c1, $this->c2, $this->c3, $this->c4, $this->c5, $this->c6];
            return $this->nombreFigura = $arrayDado[rand(0, count($arrayDado) - 1)] . "<br>"; 
        }
        // Crea nombreFigura que dice qué figura salió en el dado
        public function ultimaTirada() {
            return $this->nombreFigura;
        } 
        

    }

    
    $dado1 = new DadoPoker();
    $dado1->tira(); // Tiramos el dado una vez
    echo '<br>Esta es la tirada hecha: ' . $dado1->ultimaTirada();


    /* Creamos una clase hija donde 'manejaremos el dado' (lo tiraremos 5 veces) */ 
    class manejarDado extends DadoPoker {
        
        // Tiramos el dado 5 veces Y vemos el resultado
        public function cincoVeces(){
            for ($a = 0; $a < 5; $a++) {
                $this->tira();
                echo 'Vamos a tirar cinco veces: ' . $this->ultimaTirada();
            }
        }

        // Tirar el dado X veces y contarlas(((())))
        // Crea getTiradasTotales que cuente el num tota lde tiradas
        /**
         * WIP
         */

    }
    $dadoTirar = new manejarDado();
    $dadoTirar->tira();
    $dadoTirar->cincoVeces();




?>

</body>
</html>