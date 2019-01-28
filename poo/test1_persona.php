<?php 

/**
Tarea clase
https://www.edu.xunta.gal/centros/iesfernandowirtz/aulavirtual2/mod/assign/view.php?id=19114

POO ejercicios 
https://www.tutorialesprogramacionya.com/phpya/poo/index.php?inicio=0


**/

?>

<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
	class Persona {
	  private $nombre;
	  public function inicializar($nom) {
		$this->nombre=$nom;
		
	  }
	  public function imprimir() {
		echo 'Este clase Persona tiene de nombre: '. $this->nombre;
		echo '<br>';
	  }
	  
	}

	$per1=new Persona();
	$per1->inicializar('Juan');
	$per1->imprimir();
	$per2=new Persona();
	$per2->inicializar('Ana');
	$per2->imprimir();

	$getclase = get_class_methods('Persona');
	foreach ($getclase as $k => $v) {
		echo $k .' '. $v ."<br>";
	}


?>
</body>
</html>