<?php 
/**
Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. Mostrar el menú en forma horizontal o vertical (según que método llamemos
**/

class Menu {
    private $opcion[]; // producto a añadir
    private $direccion; // h horizontal o v vertical
    
    function cargarOpcion($opcion) {
        $this->opcion[] = $opcion;
    }
    function cargarDireccion($direccion) {
        $this->direccion = $direccion;
    }
    
    function posicion() {
        if ($this->direccion = 'h') {
            // Cargar direccion horizontal
            
            echo '<table><tr>';
                for ($i = 0, $i < count($this->direction); $i++){
                    echo '<td>'.this->direction[$i].'</td>';
                }
            echo '</tr></table>';
            
            
            
        }
        else if ($this->direccion = 'v') {
            // Cargar direccion vertical
            
            
            
        }
        else {
            echo 'Error. Debe escoger "h" (horizontal) o "v" (vertical)';
        }
    }
}

$e1 = new Menu;
$e1->cargarOpcion('Patatas');
$e1->cargarDireccion('h');
$e1->cargarOpcion('Berberechos');
$e1->posicion('')

?>