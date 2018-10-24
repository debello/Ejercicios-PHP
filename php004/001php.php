<?php
/**
Declare e inicialice o array cor así:
$cor = array(‘branco', 'verde', 'vermello', 'azul');
E que usando os valores dese array mostre:
“O ceo azul estaba cuberto por algunhas nubes de cor negro, e outras de cor branco, que ameazaban con chorar sobre o verde campo”
*/

$cor = array('branco', 'verde', 'vermello', 'azul');
array_push($cor, 'negro');
echo "O ceo $cor[3] estaba cuberto por algunhas nubes de cor $cor[4], e outras de cor $cor[0] , que ameazaban con chorar sobre o $cor[1] campo"

?>