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

    /**  Creando la CLASE principal 
     *   Haremos un enemigo 'troll' para un videojuego 
     */
    class Troll {
        protected $nombre = 'Troll';
        protected $altura = '100px';
        protected $color = 'green';
        protected $grito = 'ARLGLWL!';
    
        /** Función que nos imprimirá los 4 valores
         *  La reutilizaremos en el siguiente troll
         */
        function cantarValores() {
            echo "Este troll tiene de nombre $this->nombre, altura $this->altura, 
            color $this->color y su grito es $this->grito <br>";
        }

    }

    class TrollPantano extends Troll {

        public function __construct($nom, $alt, $col) {
            $this->nombre=$nom;
            $this->altura=$alt;
            $this->color=$col;
        }
        /* Función para destruír el objeto
        private function __destruct() {
            echo "<br>El objeto TrollPantano ha sido destruído! <br>";
        }
         */

        function cantarValores2() {
            echo "Este troll tiene de nombre $this->nombre, altura $this->altura, 
            color $this->color y su grito es $this->grito <br>";
        }

        /** Setter y Getters de TrollPantano
        *   Aquí podemos cambiar una de las 4 características del troll con SET
        *   y comprobar el valor de cada una con GET
        */

        public function getNombre() {
            return $this -> nombre;
        }
        public function setNombre($nom) {
            $this -> nombre = $nom;
        }

        public function getAltura($alt) {
            return $this -> altura;
        }
        public function setAltura($alt) {
            $this -> altura = $alt;
        }

        public function getColor() {
            return $this -> color;
        }
        public function setColor($col) {
            $this -> color = $col;
        }

        public function getGrito() {
            return $this -> grito;
        }
        public function setGrito($gri) {
            $this -> grito = $gri;
        }
    } 

    // Creamos un Troll
    $n1 = new Troll;
    $n1->cantarValores();
    // Creamos un Troll del Pantano con 3 parámetros. Se cambiamos el grito con un SETTER
    $n2 = new TrollPantano('Troll del pantano', '299px', 'Negro');
    $n2->setGrito('YEAAAAAA');
    $n2->cantarValores2();

?>
</body>
</html>