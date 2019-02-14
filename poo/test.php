<?php
/*
    class Producto {
        private static $num_productos = 0;
        
        public static function nuevoProducto() {
            return self::$num_productos++ . "<br>";
        }
    }

    $sv1 = new Producto();
    echo $sv1->nuevoProducto();
    echo Producto::nuevoProducto();
    echo Producto::nuevoProducto();
    echo Producto::nuevoProducto();
*/

    class Productos {
        public static $num_productos = 0;
        public $codigo;

        public function __construct($codigo) {
            $this->codigo = $codigo;
          
        }
        public function getCodigo() {
            return $this->codigo;
        }
    }

    $p = new Productos('GALAXYS');
    echo 'Primera frase ' . $p->codigo;
    echo '<br>Segunda frase ' . $p->getCodigo();
    echo Productos::$num_productos;

    print_r(get_class_vars('Productos'));
?>