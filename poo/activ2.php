<?php

/** Crea objetos y clases sobre algún tema 
 * 
 * to-do: 
 *  x revisar propiedades de Animal
 *  x poner alguna en MAmifero?? optional
 *  x hacer canario 
 *  hacer lagarto 
 *  x Reestructurar cómo quiero extender las propiedades de Mamífero a X
 * 
 * **/

?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php 

    /**
     *      Clase Animal
     */

    class Animal {
        public $movimiento;
        public $respiracion;
        
        public function __construct( $mov = TRUE, $res = TRUE) {
            $this->movimiento = $mov;
            $this->respiracion = $res;
        }

        public function getMovimiento(){
            if ($this->movimiento === TRUE) {
                return ' se mueve, ';
            }
            else {
                return ' no se mueve, ';
            }
        }

        public function getRespiracion(){
            if ($this->respiracion === TRUE) {
                return ' respira, ';
            }
            else {
                return ' no se mueve, ';
            }
        }
    }

    /**
     *      Clase Mamifero
     */

    class Mamifero extends Animal {
        public $animalColor;
        public $huevo;
        public $leche;
        public $numPatas; // Lo declaramos cuando creamos un animal específico
        public $puedenVolar; // Lo declaramos cuando creamos un animal específico
        public $sonido; // Lo declaramos cuando creamos un animal específico
        
        public function __construct() {
            
            $this->huevo = ' no nace de un huevo, ';
            $this->leche = ' producen leche, ';
        }

        public function getCaracteristicas(){
            return $this->huevo . $this->leche;  
        }

    }

    /**
     *      Clase Gato
     */

    class Gato extends Mamifero {
        public $animalColor;
        
        public function __construct($animalCol = 'naranja') {
            parent::__construct();
            $this->animalColor = $animalCol;
            $this->Internet = ' pueden usar Internet, ';
            $this->numPatas = ' tienen 4 patas, ';
            $this->puedenVolar = ' no pueden volar, ';
            $this->sonido = ' hacen "Miauuu", ';
            
        }

        public function setColor($animalCol){
            $this->animalColor = $animalCol;
        }

        public function getColor(){
            return $this->animalColor;
        }
        public function getCaracteristicasGato(){
            return '<br>Los gatos'. $this->huevo . $this->leche . $this->Internet
                . $this->numPatas . $this->puedenVolar . $this->sonido . 'y son de color ' .$this->getColor();
        }

    }

    /**
     *      Clase Canario
     */

    class Canario extends Mamifero {
        public $animalColor;

        public function __construct($animalCol){
            parent::__construct();
            $this->animalColor = $animalCol;
            $this->sonido = ' hacen "Pio pio", ';
            $this->numPatas = ' tienen 2 patas, ';
            $this->puedenVolar = ' pueden volar, ';
            $this->tienenPico = ' tienen pico, ';
        }

        public function getCaracteristicasCanario(){
            return '<br>Los canarios'. $this->huevo . $this->leche . 
            $this->numPatas . $this->puedenVolar . $this->sonido . 
            'y son de color ' .$this->animalColor;
        }
    }

    /**
     *      Clase Lagarto
     */

    class Lagarto extends Mamifero{
        public $animalColor;
        public $escamas;

        public function __construct($animalCol = 'negro'){
            parent::__construct();
            $this->animalColor = $animalCol;
            $this->sonido = ' hacen "Lsszzzz lszzzzz", ';
            $this->numPatas = ' tienen 4 patas, ';
            $this->puedenVolar = ' no pueden volar, ';
            $this->tienenPico = ' no tienen pico, ';
        }
    
        public function getEscamas(){
            return $this->escamas = ' tiene escamas, ';
        }

        public function getCaractLagarto(){
            return '<br>Los lagartos'. $this->huevo . $this->leche . 
            $this->numPatas . $this->puedenVolar . $this->sonido .
            $this->getEscamas() . 
            'y son de color ' .$this->animalColor . "<br>";

        }
    }

    $lag1 = new Lagarto('azul');
    echo $lag1->getEscamas();
    echo $lag1->getCaractLagarto();

    /**
     *      Imprimiendo y comprobando propiedades de las clases
     */

    $n1 = new Animal();
    echo $n1->getMovimiento();
    $n2 = new Gato('azul');
    echo $n2->getCaracteristicasGato();

    $n3 = new Canario('amarillo');
    echo $n3->getCaracteristicasCanario();





?>

</body>
</html>