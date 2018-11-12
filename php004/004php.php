<?php
/**
Investiga qué é JSON
Explica que fai o seguinte código:
“<?php
function w3rfunction($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Title": "PHP Unit",
"Author": "Sebastian Bergmann",
"Detail":
{ 
"Publisher": "Autoedicion"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");
?>”
*/



?>