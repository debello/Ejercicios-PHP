<?php

/** Crea objetos y clases sobre algún tema **/

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

abstract class Animal {
     protected $tienePluma = TRUE;
     protected $tienePatas = TRUE;
     protected $alimentacion ;

     public function __construct() {
         $this->tienePluma = $tienePluma;
         $this->tienePatas = $tienePatas;
         
     }
 }

class Mamifero extends Animal {
    
    public function __construct() {
        $this->alimentacion = 'Omnivoro';
    }
    public function getAlimentacion(){
        return $this->alimentacion;
       
    }
    //public function getPluma(){
    //    return $this->tienePluma;
    //}
}

$n1 = new Mamifero();
echo $n1->getAlimentacion() . "<br>";
if ($n1->getAlimentacion() === 'Omnivoro') {
    echo "tiene alimentacion";
}


?>

</body>
</html>