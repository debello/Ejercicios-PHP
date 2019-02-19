<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
</head>
<body>
    
<?php 
    
    
class Estudiante {
    protected $nombre;
    protected $media;

    /* La diferencia es que 
        Private sólo se puede acceder desde la propia clase Estudiante
        Protected desde la propia clase Estudiante y objetos y clases 
        heredados de ella misma
        Public se puede acceder desde cualquier lugar (clase, instancia etc)

        Para este ejemplo usaría Protected para poder heredar el nombre y media
        por ejemplo al fusionar Estudiante con Trabajo (prácticas)
        heredaría Estudiante y pasaría los datos a Trabajo
        (Estudiante Jose de media 9 trabajando en INDITEX 6 meses)
        y para cualquier otra clase que quiera usar los datos del
        estudiante
    */

    public function __construct($nom, $med) {
        $this->nombre = $nom;
        $this->media = $med;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getMedia() {
        return $this->media;
    }

    public function recuperacion() {
        if ($this->media > 5) {
            echo $this->getNombre() ." no va a recuperación<br>";
        }
        else { echo $this->getNombre() ." va a recuperación <br>";
        }
    }
    

}

$c = new Estudiante('Juan', 9);
echo $c->getNombre();
echo "<br>";
echo $c->getMedia() . "<br>";
echo $c->recuperacion();

$d = new Estudiante('Pedro', 4);
echo $d->recuperacion();

?>
    
</body>
</html>