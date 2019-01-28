<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
	class CabeceraPagina {
	  private $titulo;
	  private $ubicacion;

	  /** Constructor **/
	  public function __construct($tit,$ubi){
	  	  $this->titulo = $tit;
		  $this->ubicacion = $ubi;
	  }
	  /** Métodos de CabeceraPagina **/
	  public function inicializar($tit,$ubi)
	  {
		$this->titulo=$tit;
		$this->ubicacion=$ubi;
	  }
	  public function graficar()
	  {
		echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
		echo $this->titulo;
		echo '</div>';
	  }
	}

	$cabecera=new CabeceraPagina('Hola', 'left');
	
	$cabecera->graficar();
	$c2 = new CabeceraPagina('Allevamos', 'center');
	$c2->graficar();
?>
</body>
</html> 