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
	class Menu {
	  private $enlaces=array();
	  private $titulos=array();
	  public function cargarOpcion($en,$tit) {
		$this->enlaces[]=$en;
		$this->titulos[]=$tit;
	  }
	  public function mostrar() {
		for($f=0;$f<count($this->enlaces);$f++) {
		  echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
		  echo "<br>";
		}
	  }
	}

	$menu1=new Menu();
	$menu1->cargarOpcion('http://www.google.com','Google');
	$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
	$menu1->cargarOpcion('http://www.msn.com','MSN');
	$menu1->mostrar();
	echo get_class_methods('Menu');
?>

</body>
</html>