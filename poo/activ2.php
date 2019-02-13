<?php

/** Crea objetos y clases sobre algún tema 
 * 
 * to-do: 
 *  revisar propiedades de Animal
 *  poner alguna en MAmifero?? optional
 *  hacer canario y lagarto 
 *  Reestructurar cómo quiero extender las propiedades de Mamífero a X
 * 
 * **/

?>


<!DOCTYPE html>
<html>
<head>
    <style>
        .table2, th, td {
            border: 1px solid black;
            padding: 5px;
            
        }
    </style>
</head>
<body>
    
<?php 

/**
 * Crear Animal, Mamífero, Ave, Gato, Perro, Canario, Pinguino, Lagarto
 * 2 métodos en cada una de las clases
 * 
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


$n1 = new Animal();
echo $n1->getMovimiento();
$n2 = new Gato('azul');
echo $n2->getCaracteristicasGato();

$n3 = new Canario('amarillo');
echo $n3->getCaracteristicasCanario();


/*
$n1 = new Mamifero();
echo $n1->getAlimentacion() . "<br>";
echo $n1->getOjos() . "<br>";
if ($n1->tienePatas === TRUE ) {
    echo "El mamífero \$n1 tiene patas <br><br>";
}

$n2 = new Gato();
echo 'El gato es de color ' . $n2->getColor();
if ($n2->usanInternet === TRUE ) {
    echo "<br>Los gatos de \$n2 usan Internet<br>";
}
$n2->setColor('azul');
echo 'Ahora el gato es un gato triste y de color ' . $n2->getColor();
echo '<br> En cuanto a alimentación, este gato es ' . $n2->alimentacion;
$n3 = new Gato('negro');
echo '<br> Hemos creado un nuevo gato \$n3 de color ' . $n3->animalColor;
*/


?>

</body>
</html>