<?php
	
		if (!empty($_PSOT['personas'])) {
			$array = explode(",", $_POST['personas']);
			$post = count($array);
		}else{
				$array = array();
				$pos = 0;
		}
		if(!empty($_POST['nombre'])){
			$nom = strtolower($_POST['nombre']);
            $si=in_array($nom,$array);
            $posi=array_search($nom,$array);
			if(!empty($_POST['telefono'])){
				$tel = $_POST['telefono'];
				
				if ($si || $si === 0){
					$array[$posi+1] = $tel;
					echo "<div class='altoDch1'><p>TELEFONO CAMBIADO</p></div>";
				}else{
					$array[$pos] = $nom;
					$array[$pos+1] = $tel;
                    echo"<div class='altoDchl'><p>se ha introducido un nuevo registro</p></div>";
                }
            }else{
		echo"<div class='altoDchl'><p>se ha borrado el registro</p></div>";
		unset($array[$posi]);
		unset($array[$posi+1]);
	}
}
print_r($_POST);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

<body>

<!-- Creamos un formulario para enviar sus datos por POST a la misma página -->
<form name="formulario" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<table style="border: 0px;">
<tr style="background-color: #8080ff;">Introduzca los datos a a&ntilde;adir al list&iacute;n
<!-- Solicitamos el nombre de la persona -->
<td>
<fieldset>
<legend>Nombre</legend>
<input name="nombre" type="text" />
</fieldset>
</td>
<!-- Solicitamos el número de teléfono -->
<td>
<fieldset>
<legend>Tel&eacute;fono</legend>
<input name="telefono" type="text" />
</fieldset>
</td>
</tr>
</table>
    
<?php
    

echo "<table style='border: 0px;'>";
      echo "<tr>";
      foreach ($array as $k => $v){
          echo "<td>$k</td><td>$v</td>";
      }
      echo "</tr>";
    echo "</table>";
    
  
    
?>
<!-- Creamos un campo oculto para enviar los datos ya recogidos con anterioridad -->
<input name="personas" type="hidden" value="<?php if (isset($array)) echo implode("," , $array) ?>" style="text-align:right;" />
<!-- Enviamos los datos del formulario -->
<input type="submit" value="Aplicar cambios" />

</body>
</html>