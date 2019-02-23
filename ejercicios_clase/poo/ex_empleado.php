<?php 
/** 
Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
**/

class Empleado {
    private $n; 
    private $s;
        
    function inicializar($n, $s) {
        // nombre y sueldo
        $this->n = $n;
        $this->s = $s;
    }
    function meth2() {
        // imprime nom y sueldo y un mensaje SI debe pagar impuestos (si supera los 3000e)
        echo 'El usuario de nombre '. $this->n. ' y sueldo ' .$this->s;
        
        if ($this->s > 3000) {
            echo ' SI debe pagar impuestos <br>';
        }
        else {
            echo ' NO debe pagar impuestos <br>';
        }
    }
}


$sv1 = new Empleado();
$sv1->inicializar('Rosa', 4000);
$sv1->meth2();

$sv2 = new Empleado();
$sv2->inicializar('Paco', 2000);
$sv2->meth2();

?> 